<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  function main(){
      return view('main');
  }
    function about(){
      return view('components.sections.about');
}
    function service(){
      return view('components.sections.service');
}
    function projects(){
      return view('components.sections.projects');
    }
    function contact(){
      return view('components.sections.contact');
    }
}
