<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //追記したもの
    public function add()
    {
        return view('admin.news.create');
    }
}
