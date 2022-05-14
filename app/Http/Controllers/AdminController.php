<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pride;


class AdminController extends Controller
{
    public function index(){
        $usertype=Auth::user()->usertype;
    
        if($usertype=='1'){
            return view('admin.adminhome');
        }   
        else{
            return view('welcome');
        }
            
    }




    // Pride

    public function pride(){
        $data=Pride::all();
        return view('admin.route.pride',compact('data'));
    }

    public function uploadpride(Request $request ){

        $data=new Pride;

        $image=$request->image;
       
         $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('Prideimages', $imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
     
    }


    public function deletepride($id){
        $data=Pride::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatepride($id){
        $data=Pride::find($id);
       return view('admin.route.updatepride', compact('data'));      
    }
    

    public function updatedpride( Request $request, $id){
        $data=Pride::find($id);
        
        $image=$request->image;
       
        $imagename = time().'.'.$image->getClientOriginalExtension();

       $request->image->move('Prideimages', $imagename);
       $data->image=$imagename;
       $data->name=$request->name;
       $data->description=$request->description;
       $data->save();
       return redirect('pride');

    }
}
