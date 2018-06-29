<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\social;
use Carbon\Carbon;
use Session;

class ManagesocialController extends Controller

{
    public function __construct(){
      $this->middleware('auth');
    }
    public function social(){
      $social_data=social::all();
      return view('admin.social.social',compact('social_data'));
    }
    public function update_social(){
      $shamim=social::where('smid',1)->update([
       'sm_google_plus' => $_POST['sm_google_plus'],
       'sm_linkdin' => $_POST['sm_linkdin'],
       'sm_printer' => $_POST['sm_printer'],
       'sm_dribble' => $_POST['sm_dribble'],
       'sm_twitter' => $_POST['sm_twitter'],
       'sm_facebook' => $_POST['sm_facebook'],
        'Created_at' => Carbon::now()->toDateTimeString(),
     ]);
  if($shamim){
      return redirect(route('social'))->with('smg','Updated Sucess');
  }
    }
}
