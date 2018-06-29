<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use\App\User;
class UserController extends Controller
{
    public function index(){
      $userdata=User::all();
      return view('admin/user.AllUser',compact('userdata'));
    }

    public function Enactive_user($id){
    $enactive=User::where('status',1)->where('id',$id)->update([
      'status' => 0,
    ]);
    if($enactive){
      return redirect(route('user'));
    }
  }
  public function active_user($id){
  $active=User::where('status',0)->where('id',$id)->update([
    'status' => 1,
  ]);
  if($active){
    return redirect(route('user'));
  }
 }
}
