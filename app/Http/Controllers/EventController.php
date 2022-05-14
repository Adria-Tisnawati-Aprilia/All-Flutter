<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventController extends Controller {

    public function showAllEvent()
    : JsonResponse {

        return response()->json(Event::all());
    }

    public function showOneEvent()
    : JsonResponse{

        return response()->json(Event::find($id));
    }

    public function create(Request $request)
    : JsonResponse{

        $event = Event::create($request->all());

        return response()->json($event, Response::HTTP_CREATED);
    }

    public function update($id, Request $request)
    : JsonResponse{

        $event = Event::findOrFail($id);
        $event = update($request->all());

        return response()->json(Event::all());
    }

    public function delete($id) {

        Event::findOrFail($id)->delete();

        return response('Deleted Successfuly', Response::HTTP_OK);
    }
}
