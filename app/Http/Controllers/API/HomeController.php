<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Budaya;
use App\Models\Pariwisata;
use App\Models\Penginapan;

class HomeController extends Controller
{
    public function budaya()
    {
        $status = false;
        try {
            $data = Budaya::select('id','nama','foto','deskripsi')->paginate(2);
            foreach ($data as $item) {
                $item->foto = asset('storage/budaya/'.$item->foto);
            }

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

    public function pariwisata()
    {
        $status = false;
        try {
            $data = Pariwisata::select('id','nama','alamat','jam_buka','deskripsi','foto','harga')
                    ->orderBy('id', 'desc')->paginate(4);
            foreach ($data as $item) {
                $item->foto = asset('storage/pariwisata/'.$item->foto);
            }

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

    public function penginapan()
    {
        $status = false;
        try {
            $data = Penginapan::select('id','nama','alamat','jam_masuk_keluar','deskripsi','foto','harga')
                ->orderBy('id', 'desc')->paginate(4);
            foreach ($data as $item) {
                $item->foto = asset('storage/penginapan/'.$item->foto);
            }

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
