<?php

namespace App\Http\Controllers;

use View, DB;
use App\Models\Budaya;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;

class BudayaController extends Controller
{
    protected $model;
    protected $view     = 'budaya.';
    protected $route    = 'budaya.';

    public function __construct(Budaya $model)
    {
        $this->model = $model;
        View::share('view', $this->view);
        View::share('route', $this->route);
    }

    public function user()
    {
        return auth()->user();
    }

    public function index(Request $req)
    {
        if ($req->ajax()) {
            $data = $this->model->select();
            return DataTables::of($data)
            ->addColumn('action', function ($data) {
                return view('datatable.action', [
                    'model' => $data,
                    'edit_url' => route($this->route.'edit', $data->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
        }

        return view($this->view.'index');
    }

    public function create()
    {
        return view($this->view.'create');
    }

    public function store(Request $req)
    {
        DB::beginTransaction();
        try {
            $validator = \Validator::make(
                $req->all(),
                [
                    'name' => 'required',
                    'position' => 'required',
                    'description' => 'required',
                ],
                [
                    'name.required' => 'Silahkan Masukkan Nama !',
                    'position.required' => 'Silahkan Pilih Posisi letak Gambar !',
                    'description.required' => 'Silahkan Masukkan Deskripsi !'
                ]
            );

            if ($validator->fails()) {
                $messages = $validator->getMessageBag();
                return redirect()->back()->with('error', $messages->first())->withInput();
            }

            DB::commit();
            $budaya = new $this->model();
            $budaya->nama = $req->name;
            if ($req->file('foto')) {
                $uploadFile = $req->file('foto');
                $fileName = $uploadFile->hashName();
                $uploadFile->store('budaya', 'public');
                $budaya->foto = $fileName;
            }
            $budaya->deskripsi = $req->description;
            $budaya->position = $req->position;
            $budaya->save();

            return redirect()->route($this->route.'index')->with('success', 'Data berhasil disimpan !');
        } catch (\Exception $err) {
            DB::rollback();
            $messages = $err->getMessage();
            return redirect()->back()->with('error', $messages);
        }
    }

    public function edit($id)
    {
        $budaya = $this->model::find($id);

        return view($this->view.'edit', compact('budaya'));
    }

    public function update(Request $req, $id)
    {
        DB::beginTransaction();
        try {
            $validator = \Validator::make(
                $req->all(),
                [
                    'name' => 'required',
                    'position' => 'required',
                    'description' => 'required',
                ],
                [
                    'name.required' => 'Silahkan Masukkan Nama !',
                    'position.required' => 'Silahkan Pilih Posisi letak Gambar !',
                    'description.required' => 'Silahkan Masukkan Deskripsi !'
                ]
            );

            if ($validator->fails()) {
                $messages = $validator->getMessageBag();
                return redirect()->back()->with('error', $messages->first())->withInput();
            }

            DB::commit();
            $budaya = $this->model::find($id);
            $budaya->nama = $req->name;
            if ($req->file('foto')) {
                $image_path = storage_path("app/public/budaya/{$budaya->foto}");
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $uploadFile = $req->file('foto');
                $fileName = $uploadFile->hashName();
                $uploadFile->store('budaya', 'public');
                $budaya->foto = $fileName;
            }
            $budaya->deskripsi = $req->description;
            $budaya->position = $req->position;
            $budaya->update();

            return redirect()->route($this->route.'index')->with('success', 'Data berhasil diupdate !');
        } catch (\Exception $err) {
            DB::rollback();
            $messages = $err->getMessage();
            return redirect()->back()->with('error', $messages);
        }
    }

    public function delete($id)
    {
        DB::beginTransaction();
        $status = false;
        try{
            DB::commit();
            $dataDel = $this->model::find($id);
            $image_path = storage_path("app/public/budaya/{$dataDel->foto}");
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $dataDel->delete();

            $status = true;
            $data['message'] = 'Data berhasil dihapus !';
            $response = [
                'status' => $status,
                'data' => $data
            ];

            return response()->json($response);
        }catch(\Exception $err){
            DB::rollback();
            $data['message'] = $err->getMessage();
            $response = [
                'status' => $status,
                'data' => $data
            ];
            return response()->json($response);
        }
    }
}
