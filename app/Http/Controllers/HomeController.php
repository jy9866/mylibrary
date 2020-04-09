<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


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

  public function getFacilities(){
    return view('facilities');
  }

  public function getContactUs(){
    return view('contactus');
  }

  public function getbookshow(){
    return view('/book/show');
  }
  public function getPublisher(){
    return view('/resources/publisher');
  }

  public function getAuthor(){
    return view('/resources/author');
  }

  public function getAdminPage(){
    if (Gate::allows('admin-only',auth()->user())) {

    return view('/admin/adminhomepage');
  }
  return redirect('/');
  }


}
