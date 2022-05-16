<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pride;
use App\Models\ResursMain;
use App\Models\Resurs;
use App\Models\User;


class AdminController extends Controller
{

     // Admin User
    public function index(){
        $data=User::all();

        $usertype=Auth::user()->usertype;
    
        if($usertype=='1'){
            return view('admin.adminhome',compact('data'));
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








    //ResursMain

    public function resursmain(){
        $data=ResursMain::all();
        return view('admin.route.resursmain',compact('data'));
    }


    public function uploadresursmain(Request $request ){

        $data=new ResursMain;

        $image=$request->image;
       
         $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('ResursMainimages', $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->link=$request->link;
        $data->save();
        return redirect()->back();
     
    }  


    public function deleteresursmain($id){
        $data=ResursMain::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function updateresursmain($id){
        $data=ResursMain::find($id);
       return view('admin.route.updateresursmain', compact('data'));      
    } 

    public function updatedresursmain( Request $request, $id){
        $data=ResursMain::find($id);
        
        $image=$request->image;
       
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('ResursMainimages', $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->link=$request->link;
        $data->save();
       return redirect('resursmain');

    }





    //Resurs

    public function resurs(){
        $data=Resurs::all();
        return view('admin.route.resurs', compact('data'));
    }

    public function uploadresurs(Request $request ){

        $data=new Resurs;

        $image=$request->image;
       
         $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('Resursimages', $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->link=$request->link;
        $data->save();
        return redirect()->back();
     
    }  

    public function deleteresurs($id){
        $data=Resurs::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateresurs($id){
        $data=Resurs::find($id);
       return view('admin.route.updateresurs', compact('data'));      
    } 



    public function updatedresurs( Request $request, $id){
        $data=Resurs::find($id);
        
        $image=$request->image;
       
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('Resursimages', $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->link=$request->link;
        $data->save();
       return redirect('resurs');

    }



}
