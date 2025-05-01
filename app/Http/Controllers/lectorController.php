<?php

namespace App\Http\Controllers;
use App\Models\Lector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class lectorController extends Controller
{
    // GET all
    public function index()
    {
        $lectores = Lector::all();
        return response()->json($lectores, 200);
    }

    // GET one by ID
    public function show($id)
    {
        $lector = Lector::find($id);
        if (!$lector) {
            return response()->json(['message' => 'Lector not found'], 404);
        }
        return response()->json($lector, 200);
    }

    // POST - Create
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required|email',
        ]);

        if ($validator ->fails()) {
            $res = $validator->errors();
            return response()->json($res, 400);
        }

        $lector = Lector::create($request->all());
        return response()->json($lector, 201);
    }

    // PUT - Update
    public function update(Request $request, $id)
    {
        $lector = Lector::find($id);
        if (!$lector) {
            return response()->json(['message' => 'Lector not found'], 404);
        }
        $validator = Validator::make($request->all(), [
            'email'=> 'email',
        ]);

        if ($validator ->fails()) {
            $res = $validator->errors();
            return response()->json($res, 400);
        }

        $lector->update($request->all());
        return response()->json($lector, 200);
    }

    // DELETE
    public function destroy($id)
    {
        $lector = Lector::find($id);
        if (!$lector) {
            return response()->json(['message' => 'Lector not found'], 404);
        }
        $lector->delete();
        return response()->json(['message' => 'Lector deleted'], 200);
    }
}
