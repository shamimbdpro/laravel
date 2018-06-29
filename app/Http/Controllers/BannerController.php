<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Banner;
use Carbon\Carbon;
use Session;

class BannerController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $banner=Banner::where('ban_status',1)->orderBy('ban_id','DESC')->get();
    return view('admin/banner/all-banner', compact('banner'));
  }
  public function show_banner_form(){
    return view('admin/banner/add-banner');
  }
  public function add(Request $request){
    $this->validate($request,[
     'ban-title' => 'required',

    ],[
     'ban-title.required' => 'Title is required',
    ]);
    $banner=Banner::insertGetId([
      'ban_title' => $_POST['ban-title'],
      'ban_subtitle' => $_POST['ban-subtitle'],
      'btn' => $_POST['ban-btn'],
      'btn_url' => $_POST['ban-url'],
      'ban_photo' => 'index.jpg',
      'Created_at' => Carbon::now()->toDateTimeString(),
    ]);
    if($request->hasFile('ban-photo')){
       $image=$request->file('ban-photo');
       $imageName='banner_'.$banner.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->save(base_path('public/uploads/'.$imageName));

       Banner::where('ban_id',$banner)->update([
         'ban_photo' =>$imageName,

       ]);
    }
  
    return redirect(route('show-banner'))->with('smg','Banner Add Success');
  }

  public function edit($id){
    $edit=banner::where('ban_status',1)->where('ban_id',$id)->firstOrFail();
   
    return view ('admin.banner.edit-banner',compact('edit'));

  }
  public function update(Request $request,$id){
    $this->validate($request,[
     'ban-title' => 'required',

    ],[
     'ban-title.required' => 'Title is required',
    ]);
    $banner=Banner::where('ban_status',1)->where('ban_id',$id)->update([
      'ban_title' => $_POST['ban-title'],
      'ban_subtitle' => $_POST['ban-subtitle'],
      'btn' => $_POST['ban-btn'],
      'btn_url' => $_POST['ban-url'],
      'ban_photo' => 'index.jpg',
      'Created_at' => Carbon::now()->toDateTimeString(),
    ]);
    if($request->hasFile('ban-photo')){
       $image=$request->file('ban-photo');
       $imageName='banner_'.$banner.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->save(base_path('public/uploads/'.$imageName));
         Banner::where('ban_id',$id)->update([
      'ban_photo' =>$imageName,
    ]);
    }
  
    return redirect(route('show-banner'))->with('smg','Banner Add Success');
  }

 
  public function delete($id){
      $trash=banner::where('ban_status',1)->where('ban_id',$id)->update([
        'ban_status' => 0,
      ]);
      if($trash){
        return redirect(route('all-banner'))->with('trash','Data Deleted Sucessfuly');
      }
  }
}
