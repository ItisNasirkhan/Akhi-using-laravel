<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller{

public function index(){
    return view('home.userpage_content');
}



public function redirect(){

 
$usertype=auth::user()->usertype;
if($$usertype==1){
    return View('home.userpage');
}
else{
    return View('home.userpage');
}
  }
    }