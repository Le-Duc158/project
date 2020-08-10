<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelAdmin;
use App\Http\Requests\Requestadmin;
use DB;

class ControllerAdmin extends Controller
{
    // post admin
    public function postlistadmin(Request $request){
         $addadmin = new ModelAdmin;
         $addadmin->name= $request->name;
         $addadmin->email= $request->email;
         $addadmin->password= $request->password;
         $addadmin->save();
        return redirect()->route('listadmin');
    }
    // add admin
    public function addadmin(){
        return view('Admin.adminuser.addadmin');
    }
    public function getlistadmin(){
        $list_admin = ModelAdmin::all();
        return view("Admin/adminuser/listadmin",["list_user"=>$list_admin]);
    }
}
