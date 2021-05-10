<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('template.index');
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
    public function book_detail(){
        return view ('template.book_detail');
    }
    public function best_selling(){
        return view ('template.best_selling');
    }
    public function cart(){
        return view ('template.cart');
    }
    public function category_book(){
        return view ('template.category_book');
    }
    public function handleCart(){
        return view ('template.handleCart');
    }
    public function new_book(){
        return view ('template.new_book');
    }
}
