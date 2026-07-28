<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogDetails()
    {
        return view('blog.BlogDetails');
    }

    public function blogGrid()
    {
        return view('blog.BlogGrid');
    }

    public function blogStandard()
    {
        return view('blog.BlogStandard');
    }

}
