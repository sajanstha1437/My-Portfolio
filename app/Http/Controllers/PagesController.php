<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to My Portfolio!!!";
       // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);

        $text = "Hello Everyone";
        return view('pages.index')->with('text',$text);
        
        
    }
    public function about(){
        $title = "About Me";
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data= array(
            'title'=> 'Skills I Acquire',
            'services' =>['Web Desgining', 'Programming', 'Artificial Intelligence','SEO']
        );
        return view('pages.services')->with($data);
    }
}
