<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\FileResource;

class FileController extends Controller
{
    public function index(Request $request)
    {
        return FileResource::collection($request->user()->files);
    }
}
