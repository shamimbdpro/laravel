<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\social;
use App\contact;
use App\Banner;
use Carbon\Carbon;
use Session;
class WebsiteController extends Controller
{
    public function __construct(){

    }
    public function index(){
      $banner=Banner::where('ban_status',1)->orderBy('ban_id','DESC')->limit(1)->get();
      return view('website.index', compact('banner'));

    }
    public function about(){
        return view('website.about');
    }
    public function contact(){
       $media= social::get();
        return view('website.contact',compact('media'));
    }
    public function service(){
        return view('website.service');
    }
    public function portfolio(){
        return view('website.portfolio');
    }
    public function portfolio_single(){
        return view('website.portfolio_single');
    }
    public function blog_grid(){
        return view('website.blog_grid');
    }
    public function blog_single(){
        return view('website.blog_single');
    }

    public function insert(Request $request){
       $this->validate($request,[
        'user_name' => 'required',
         'user_email' => 'required',
         'user_subject' => 'required',
         'user_message' => 'required',
          ],[

            'user_name.required' => 'pease enter your name',
            'user_email.required' => 'Enter enter your Email',
            'user_subject.required' => 'Enter enter your Subject',
            'user_message.required' => 'Enter enter your Message',
          ]);
      $insert=contact::insert([
         'contactname' => $_POST['user_name'],
         'contactemail' => $_POST['user_email'],
         'contactsubject' => $_POST['user_subject'],
         'contactmessage' => $_POST['user_message'],
         'Created_at' => Carbon::now()->toDateTimeString(),

      ]);
      if($insert){
        Session::flash('status','value');
          return redirect('contact');
      }else{
        Session::flash('error','value');
          return redirect('contact');
      }
  }

}
