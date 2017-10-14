<?php

namespace App\Http\Controllers\api;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class APINewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return response()->json($news);
    }

    public function show($id)
    {
        $notice = News::findOrFail($id);
        if($notice){
            return response()->json($notice, 200);
        } else {
            return response()->json(['error' => 'Resource not found'], 501);
        }
    }
}
