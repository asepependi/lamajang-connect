<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Budaya;
use App\Models\Pariwisata;
use App\Models\Penginapan;
use Illuminate\Http\Request;
use App\Http\Traits\MaskMoney;

class MasterDataController extends Controller
{
    use MaskMoney;

    public function budaya(Request $request)
    {
        $status = false;
        try {
            $data = Budaya::select('id','nama','foto','deskripsi');
            if (!empty($request->get('nama'))) {
                $data->where('nama', 'LIKE', '%'.$request->get('nama').'%');
            }
            $dataList = $data->paginate(3);

            foreach ($dataList as $item) {
                $item->foto = asset('storage/budaya/'.$item->foto);
            }

            $status = true;
            $response = [
                'status' => $status,
                'data' => $dataList
            ];
            return response()->json($response);
        } catch (\Exception $err) {
            $res['message'] = $err->getMessage();
            $response = [
                'status' => $status,
                'data' => $res
            ];
            return response()->json($response);
        }
    }

    public function pariwisata(Request $request)
    {
        $status = false;
        try {
            $data = Pariwisata::select('id','nama','alamat','jam_buka','deskripsi','foto','harga')->orderBy('id', 'desc');
            if (!empty($request->get('nama'))) {
                $data->where('nama', 'LIKE', '%'.$request->get('nama').'%');
            }
            $dataList = $data->paginate(6);

            foreach ($dataList as $item) {
                $item->foto = asset('storage/pariwisata/'.$item->foto);
            }

            $status = true;
            $response = [
                'status' => $status,
                'data' => $dataList
            ];
            return response()->json($response);
        } catch (\Exception $err) {
            $res['message'] = $err->getMessage();
            $response = [
                'status' => $status,
                'data' => $res
            ];
            return response()->json($response);
        }
    }

    public function pariwisataDetail($id)
    {
        $status = false;
        try {
            $data = Pariwisata::find($id);
            $data->foto = asset('storage/pariwisata/'.$data->foto);
            $data->harga = $this->rupiah($data->harga);

            $status = true;
            $response = [
                'status' => $status,
                'data' => $data
            ];
            return response()->json($response);
        } catch (\Exception $err) {
            $res['message'] = $err->getMessage();
            $response = [
                'status' => $status,
                'data' => $res
            ];
            return response()->json($response);
        }
    }

    public function penginapan(Request $request)
    {
        $status = false;
        try {
            $data = Penginapan::select('id','nama','alamat','jam_masuk_keluar','deskripsi','foto','harga')->orderBy('id', 'desc');
            if (!empty($request->get('nama'))) {
                $data->where('nama', 'LIKE', '%'.$request->get('nama').'%');
            }
            $dataList = $data->paginate(10);

            foreach ($dataList as $item) {
                $item->foto = asset('storage/penginapan/'.$item->foto);
            }

            $status = true;
            $response = [
                'status' => $status,
                'data' => $dataList
            ];
            return response()->json($response);
        } catch (\Exception $err) {
            $res['message'] = $err->getMessage();
            $response = [
                'status' => $status,
                'data' => $res
            ];
            return response()->json($response);
        }
    }

    public function penginapanDetail($id)
    {
        $status = false;
        try {
            $data = Penginapan::find($id);
            $data->foto = asset('storage/penginapan/'.$data->foto);
            $data->harga = $this->rupiah($data->harga);

            $status = true;
            $response = [
                'status' => $status,
                'data' => $data
            ];
            return response()->json($response);
        } catch (\Exception $err) {
            $res['message'] = $err->getMessage();
            $response = [
                'status' => $status,
                'data' => $res
            ];
            return response()->json($response);
        }
    }
}
