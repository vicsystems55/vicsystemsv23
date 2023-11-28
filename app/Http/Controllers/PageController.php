<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){
        $pageTitle = 'Home';
        $subTitle = 'Developing Functionality';
        return view('index', compact('pageTitle', 'subTitle'));
    }

    public function services(){
        $pageTitle = 'Services';
        $subTitle = 'What We Deliver';
        return view('services', compact('pageTitle', 'subTitle'));
    }

    public function about_us(){
        $pageTitle = 'About us';
        $subTitle = 'Who We Are';
        return view('about_us', compact('pageTitle', 'subTitle'));
    }

    public function contact_us(){
        $pageTitle = 'Contact us';
        $subTitle = 'Get In Touch';
        return view('contact_us', compact('pageTitle', 'subTitle'));
    }

    public function portfolio(){
        $pageTitle = 'Our Portfolio';
        $subTitle = "Projects We've Delivered";
        return view('portfolio', compact('pageTitle', 'subTitle'));
    }
}
