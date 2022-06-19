<?php

namespace App\Http\Controllers\API;



use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function index()
    {
        // $data = Product::all();
        $data = Product::with('category')->get();
        return response()->json($data, 200);
    }
    public function show($id)
    {
        $data = Product::where('id', $id)->first();
        if (!empty($data)) {
            return $data;
        }
        return response()->json(['message' => 'data tidak ditemukan'], 404);
    }
    public function destroy($id)
    {
        $data = Product::where('id', $id)->first();
        if (empty($data)) {
            return response()->json(['message' => 'data tidak ditemukan'], 404);
        }
        $data->delete();
        return response()->json([
            'message' => 'data berhasil dihapus',
            'data' => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required'
        ]);
        if ($validate->fails()) {
            return $validate->errors();
            // return product::create($request->all());

        }

        $data = Product::create($request->all());
        return response()->json([
            'message' => 'data berhasil disimpan',
            'data' => $data
        ], 201);
    }
    //update
    public function update(Request $request, $id)
    {
        $data = Product::where('id', $id)->first();
        if (!empty($data)) {
            return response()->json(['message' => 'data tidak ditemukan'], 404);
        }
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required'
        ]);
        if ($validate->fails()) {
            return $validate->errors();
            // return product::create($request->all());

        }

        $data->update($request->all());
        return response()->json([
            'message' => 'data berhasil disimpan',
            'data' => $data
        ], 201);
    }
}
