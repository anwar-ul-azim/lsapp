<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }
    
    public function about(){
        $titles = array(
            'title' => 'about',
            'abouts' => ['about1','about2', 'about3'],
        );
        // $title = 'about';
        // return view( 'pages.about', compact('title'));
        // return view( 'pages.about')->with('title', $title);
        return view( 'pages.about')->with($titles);
    }

    public function service(){
        return view('pages.service');
    }
}