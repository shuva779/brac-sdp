<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");

    }
    public function registration(){
        return view("auth.registration");
    }

    public function registerUser(Request $request){
        $request->validate([
            'user_email'=>'required',
            'user_password'=>'required',
        ]);  

        $user = new User();
        $user->user_fullName= $request->user_fullName;
        $user->user_userName= $request->user_userName;
        $user->user_email= $request->user_email;
        $user->user_gender= $request->user_gender;
        $user->user_dob= $request->user_dob;
        $user->user_qualification= $request->user_qualification;
        $user->user_phone= $request->user_phone;
        $user->user_password= Hash::make($request->user_password);
        $user->user_div= $request->user_div;
        //$user->user_dis= $request->user_dis;
        //$user->user_upa= $request->user_upa;
        $user->user_fullAddress= $request->user_fullAddress;
        $user->user_workexp= $request->user_workexp;
        $user->user_pin= $request->user_pin;
        $user->user_designation= $request->user_designation;
        $user->user_empType= $request->user_empType;
        $user->user_joinDate= $request->user_joinDate;
        //$user->user_branchName=implode(',',$request->user_branchName);
        $user->user_region= $request->user_region;
        $user->user_rm= $request->user_rm;
        $user->user_dm= $request->user_dm;
        $user->user_am= $request->user_am;
        //$user->user_projectName=implode(',',$request->user_projectName);
        $user->user_pdiv= $request->user_pdiv;
        //$user->user_pdis= $request->user_pdis;
        //$user->user_pupa= $request->user_pupa;
        $res=$user->save();
        if($res){
            return back()->with('success','You have Register successfully');
        }
        else{
            return back()->with('fail','Wrong Enter');
        }
    }
    public function loginUser( Request $request){
        $request->validate([
            'user_email'=>'required',
            'user_password'=>'required',
        ]);

        $user = User::where('user_email','=',$request->user_email)->first();
        if($user){
            if(Hash::check($request->user_password,$user->user_password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('success','Password not matches');
            }
        }
        else{
            
            return back()->with('success','You have Not Registed');
        }

    }
    public function dashboard(){
        $data=array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();  
        }
       return view('dashboard',compact('data')); 

    }
    public function logout(){
        if(Session::get('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }

    }
}
