<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LapanganController extends Controller {

    public function showAllLapangan()
    : JsonResponse {

        return response()->json(Lapangan::all());
    }

    public function showOneLapangan()
    : JsonResponse{

        return response()->json(Lapangan::find($id));
    }

    public function create(Request $request)
    : JsonResponse{

        $lapangan = Lapangan::create($request->all());

        return response()->json($lapangan, Response::HTTP_CREATED);
    }

    public function update($id, Request $request)
    : JsonResponse{

        $lapangan = Lapangan::findOrFail($id);
        $lapangan = update($request->all());

        return response()->json(Lapangan::all());
    }

    public function delete($id) {

        Lapangan::findOrFail($id)->delete();

        return response('Deleted Successfuly', Response::HTTP_OK);
    }
}
