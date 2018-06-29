<?php
namespace App\Http\Controllers\recycle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Banner;
use Carbon\Carbon;
use Session;

class bannerController extends Controller
{
  public function __construct(){
    $this->middleware('Superadmin');
    $this->middleware('auth');
  }
 public function index(){
   $recycle=Banner::where('ban_status',0)->orderBy('ban_id','DESC')->get();
   return view('admin.recycle.banner',compact('recycle'));
 }
  public function restor_trash($id){
  $restor_trash=banner::where('ban_status',0)->where('ban_id',$id)->update([
    'ban_status' => 1,
  ]);

  if($restor_trash){
    return back();
  }
 }
 public function hard_delete($id){
   Banner::where('ban_status',0)->where('ban_id',$id)->delete();
  return redirect(route('recycle_banner'))->with('status', 'Data has been Deleted');
 }
}
