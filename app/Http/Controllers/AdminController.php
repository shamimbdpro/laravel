<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  public function index(){
  $total_user =User::where('status',1)->count('status',1);
    return view('admin.deshboard.index',compact('total_user'));

  }
}
