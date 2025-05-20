<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homePage(){

        $data =[
            'name' => 'ABID HAFIZ',
            'profession' => 'Laravel Web Developer'
        ];
        return view('home', compact('data'));
    }
    public function aboutPage(){
        return view('about');
    }

    public function contactPage(){
        return view('contact');
    }
    public function ServicesPage(){
        return view('servies');
    }
    public function portfolioPage(){
        return view('portfolio');
    }

}
