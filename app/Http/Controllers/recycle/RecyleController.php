<?php
namespace App\Http\Controllers\recycle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\contact;
use Carbon\Carbon;
use Session;
class RecyleController extends Controller
{
  public function __construct(){
    $this->middleware('Superadmin');
    $this->middleware('auth');
  }
 public function index(){
   $recycle=contact::where('contactstatus',0)->orderBy('contactId','DESC')->get();
   return view('admin.recycle.contact',compact('recycle'));
 }
  public function restor_trash($id){
  $restor_trash=contact::where('contactstatus',0)->where('contactId',$id)->update([
    'contactstatus' => 1,
  ]);

  if($restor_trash){
    return back();
  }
 }
 public function hard_delete($id){
   $recycle=contact::where('contactstatus',0)->where('contactId',$id)->delete();
  return redirect(route('RecycleBin'))->with('status', 'Data has been Deleted');
 }
}
