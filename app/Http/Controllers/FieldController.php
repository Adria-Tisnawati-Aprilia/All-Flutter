<?php

namespace App\Http\Controllers;

class FieldController extends Controller
{
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

        return response()->json($lapangan, Response::HTTP_OK);
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
