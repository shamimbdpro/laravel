<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\contact;
use Carbon\Carbon;
use Session;
class ContactusController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
}
 public function index(){
    $contactus=contact::where('contactstatus',1)->orderBy('contactId','DESC')->get();
    return view('admin.contact.contactus',compact('contactus'));
  }
  public function view($id){
    $data=contact::where('contactstatus',1)->where('contactId',$id)->firstOrFail();
    return view('admin/contact.contact-view',compact('data'));
  }
  public function trash($id){
  $trash=contact::where('contactstatus',1)->where('contactId',$id)->update([
    'contactstatus' => 0,
  ]);
  if($trash){
    return redirect(route('contactus'))->with('trash','Data Deleted Sucessfuly');
  }
}

}
