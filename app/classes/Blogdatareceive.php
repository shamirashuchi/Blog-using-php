<?php


namespace App\classes;


use App\classes\Blogdata;
use Illuminate\Support\Facades\View;

class Blogdatareceive
{
    public $blog, $blogs;

    public function index()
    {
        $this->blog = new Blogdata();
        $this->blogs = $this->blog->getAllBlog();
        return view('home', ['blogs' => $this->blogs]);
    }
}