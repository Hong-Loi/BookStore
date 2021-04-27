<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('template.home');
    }
    public function contactus(){
        return view ('template.contactus');
    }
    public function r404error(){
        return view ('template.404error');
    }
    public function aboutus(){
        return view ('template.aboutus');
    }
    public function authors(){
        return view ('template.authors');
    }
    public function authordetail(){
        return view ('template.authordetail');
    }
    public function comingsoon(){
        return view ('template.comingsoon');
    }
    public function index_2(){
        return view ('template.index-2');
    }
    public function indexv3(){
        return view ('template.indexv3');
    }
    public function newsdetail(){
        return view ('template.newsdetail');
    }
    public function indexv2(){
        return view ('template.indexv2');
    }
    public function newsgrid(){
        return view ('template.newsgrid');
    }
    public function newslist(){
        return view ('template.newslist');
    }
    public function productdetail(){
        return view ('template.productdetail');
    }
    public function products(){
        return view ('template.products');
    }
}
