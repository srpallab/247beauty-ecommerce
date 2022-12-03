<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactInformation;
use App\Models\SocialMedia;
use App\Models\Basic;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class GeneralController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function basic(){
        $data = Basic::where('basic_status',1)->where('basic_id',1)->firstOrFail();
        return view('admin.general.basic',compact('data'));
    }
    public function update_basic(Request $request){

        Basic::where('basic_status',1)->where('basic_id',1)->update([
            'basic_title'=>$request['title'],
            'basic_subtitle'=>$request['subtitle'],
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('logo')){
            $image=$request->file('logo');
            $logo='logo_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/basic/'.$logo);

            Basic::where('basic_id',1)->update([
                'basic_logo'=>$logo,
            ]);
        }

        if($request->hasFile('favicon')){
            $image=$request->file('favicon');
            $favicon='favicon_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/basic/'.$favicon);

            Basic::where('basic_id',1)->update([
                'basic_favicon'=>$favicon,
            ]);
        }

        $notification = array(
            'messege' => 'Basic Information Update Success!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);

    }

    //========================== Social Media Information ==========================
    public function social(){
        $data = SocialMedia::where('sm_status',1)->where('sm_id',1)->firstOrFail();
        return view('admin.general.social',compact('data'));
    }
    public function update_social(Request $request){

        SocialMedia::where('sm_status',1)->where('sm_id',1)->update([
            'sm_facebook'=>$request['facebook'],
            'sm_twitter'=>$request['twitter'],
            'sm_linkedin'=>$request['linkedin'],
            'sm_instagram'=>$request['instagram'],
            'sm_pinterest'=>$request['pinterest'],
            'sm_skype'=>$request['skype'],
            'sm_youtube'=>$request['youtube'],
            'sm_google'=>$request['google'],
            'sm_vimeo'=>$request['vimeo'],
            'sm_whatsapp'=>$request['whatsapp'],
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        $notification = array(
            'messege' => 'Social Media Update Success!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    //========================== Contact Information ==========================
    public function contactinformation(){
        $data = ContactInformation::where('ci_status',1)->where('ci_id',1)->firstOrFail();
        return view('admin.general.contactinformation',compact('data'));
    }

    public function update_contactinformation(Request $request){

        ContactInformation::where('ci_status',1)->where('ci_id',1)->update([
            'ci_phone1'=>$request['phone1'],
            'ci_phone2'=>$request['phone2'],
            'ci_phone3'=>$request['phone3'],
            'ci_phone4'=>$request['phone4'],
            'ci_email1'=>$request['email1'],
            'ci_email2'=>$request['email2'],
            'ci_email3'=>$request['email3'],
            'ci_email4'=>$request['email4'],
            'ci_add1'=>$request['add1'],
            'ci_add2'=>$request['add2'],
            'ci_add3'=>$request['add3'],
            'ci_add4'=>$request['add4'],
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        $notification = array(
            'messege' => 'Contact Update Success!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
