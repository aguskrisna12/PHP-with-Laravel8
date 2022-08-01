<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //fungsi get deetail user
    public function getUser(Request $request)
    {
        $data['name'] = $request->name;
        $data['umur'] = $request->umur;
        $data['alamat'] = $request->alamat;

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $data
        ]);
    }
}
