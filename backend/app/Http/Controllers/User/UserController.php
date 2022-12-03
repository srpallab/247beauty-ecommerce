<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller{
    public function index(){
        return view('user.home.home');
    }

    public function updateData(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ],[
            'name.required' => 'input your name',
        ]);

        User::findOrFail(Auth::id())->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'updated_at' => Carbon::now(),
        ]);

        $notification=array(
            'messege'=>'Your Profile Updated',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    // imag page
    public function imagePage(){
        return view('user.change-image');
    }

    //update image
    public function updateImage(Request $request){

        $request->validate([
            'image' => 'required',
        ],[
            'image.required' => 'Please enter image!',
        ]);

        $old_image = $request->old_image;

        if (User::findOrFail(Auth::id())->image == 'uploads/avatar.png') {
            $image = $request->file('image');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('uploads/website/user/'.$name_gen);
            $save_url = 'uploads/website/user/'.$name_gen;
            User::findOrFail(Auth::id())->Update([
                'image' => $save_url
            ]);
            $notification=array(
                'messege'=>'Image Successfully Updated',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

        }else {
            unlink($old_image);
            $image = $request->file('image');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('uploads/website/user/'.$name_gen);
            $save_url = 'uploads/website/user/'.$name_gen;
            User::findOrFail(Auth::id())->Update([
                'image' => $save_url
            ]);

            $notification=array(
                'messege'=>'Image Successfully Updated',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    // update password

    public function updatePassPage(){
        return view('user.password');
    }

    //store password
    public function storePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'password_confirmation' => 'required|min:8',
        ]);

        $db_pass = Auth::user()->password;
        $current_password = $request->old_password;
        $newpass = $request->new_password;
        $confirmpass = $request->password_confirmation;

       if (Hash::check($current_password,$db_pass)) {
          if ($newpass === $confirmpass) {
              User::findOrFail(Auth::id())->update([
                'password' => Hash::make($newpass)
              ]);

              Auth::logout();
              $notification=array(
                'messege'=>'Your Password Change Success. Now Login With New Password',
                'alert-type'=>'success'
            );
            return Redirect()->route('login')->with($notification);

          }else {

            $notification=array(
                'messege'=>'New Password And Confirm Password Not Same',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
          }
       }else {
        $notification=array(
            'messege'=>'Old Password Not Match',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
       }
    }

    // User Logout
    public function userLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification=array(
            'User Logout Successfully',
            'alert-type'=>'success',
        );

        return redirect('/login')->with($notification);
    }
}
