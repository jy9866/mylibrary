<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function getHome(){
    return view('homepage');
  }

  public function getaboutusintro(){
    return view('/aboutus/aboutus');
  }

  public function getaboutusvisionmission(){
    return view('/aboutus/VisionMission');
  }

  public function getaboutusservices(){
    return view('/aboutus/services');
  }

  public function getaboutcontactus(){
    return view('/aboutus/contactus');
  }
}
