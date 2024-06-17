<?php

namespace App\Http\Controllers;

use View, DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Traits\MaskMoney;
use App\Models\Penginapan;
use Illuminate\Support\Facades\File;

class PenginapanController extends Controller
{
    use MaskMoney;
    protected $model;
    protected $view     = 'penginapan.';
    protected $route    = 'penginapan.';

    public function __construct(Penginapan $model)
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
                    'alamat' => 'required',
                    'jam_masuk_keluar' => 'required',
                    'harga' => 'required',
                    'description' => 'required',
                ],
                [
                    'name.required' => 'Silahkan Masukkan Nama !',
                    'alamat.required' => 'Silahkan Masukkan Alamat !',
                    'jam_masuk_keluar.required' => 'Silahkan Masukkan Jam Buka !',
                    'harga.required' => 'Silahkan Masukkan Harga !',
                    'description.required' => 'Silahkan Masukkan Deskripsi !'
                ]
            );

            if ($validator->fails()) {
                $messages = $validator->getMessageBag();
                return redirect()->back()->with($messages->first())->withInput();
            }

            DB::commit();
            $penginapan = new $this->model();
            $penginapan->nama = $req->name;
            $penginapan->jam_masuk_keluar = $req->jam_masuk_keluar;
            $penginapan->alamat = $req->alamat;
            $penginapan->harga = $this->convert_rupiah($req->harga);
            if ($req->file('foto')) {
                $uploadFile = $req->file('foto');
                $fileName = $uploadFile->hashName();
                $uploadFile->store('penginapan', 'public');
                $penginapan->foto = $fileName;
            }
            $penginapan->deskripsi = $req->description;
            $penginapan->save();

            return redirect()->route($this->route.'index')->with('success', 'Data berhasil disimpan !');
        } catch (\Exception $err) {
            DB::rollback();
            $messages = $err->getMessage();
            return redirect()->back()->with('error', $messages);
        }
    }

    public function edit($id)
    {
        $data = $this->model::find($id);
        $data->harga = $this->rupiah($data->harga);

        return view($this->view.'edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        DB::beginTransaction();
        try {
            $validator = \Validator::make(
                $req->all(),
                [
                    'name' => 'required',
                    'alamat' => 'required',
                    'jam_masuk_keluar' => 'required',
                    'harga' => 'required',
                    'description' => 'required',
                ],
                [
                    'name.required' => 'Silahkan Masukkan Nama !',
                    'alamat.required' => 'Silahkan Masukkan Alamat !',
                    'jam_masuk_keluar.required' => 'Silahkan Masukkan Jam Buka !',
                    'harga.required' => 'Silahkan Masukkan Harga !',
                    'description.required' => 'Silahkan Masukkan Deskripsi !'
                ]
            );

            if ($validator->fails()) {
                $messages = $validator->getMessageBag();
                return redirect()->back()->with($messages->first())->withInput();
            }

            DB::commit();
            $penginapan = $this->model::find($id);
            $penginapan->nama = $req->name;
            $penginapan->jam_masuk_keluar = $req->jam_masuk_keluar;
            $penginapan->alamat = $req->alamat;
            $penginapan->harga = $this->convert_rupiah($req->harga);
            if ($req->file('foto')) {
                $image_path = storage_path("app/public/penginapan/{$penginapan->foto}");
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $uploadFile = $req->file('foto');
                $fileName = $uploadFile->hashName();
                $uploadFile->store('penginapan', 'public');
                $penginapan->foto = $fileName;
            }
            $penginapan->deskripsi = $req->description;
            $penginapan->update();

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
            $image_path = storage_path("app/public/penginapan/{$dataDel->foto}");
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
