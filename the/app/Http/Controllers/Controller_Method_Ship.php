<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_Method_Ship;
use App\Http\Requests\Request_Method_Ship;
use DB;

class Controller_Method_Ship extends Controller
{
    // post method ship
    public function addmethodship(Request_Method_Ship $request){
        $addmethodship = new Model_Method_Ship;
        $addmethodship->name = $request->name;
        $addmethodship->status = $request->status;
        $addmethodship->save();
        return redirect()->route("listaddmethodship");
    }
    public function getaddmethodship(){
        return view("Admin/ship_method/add_method_ship");
    }
    public function listaddmethodship(Request $request){
        $list_ship = DB::table('shipping_method')->paginate(5);
        return view('Admin.ship_method.list_method_ship',compact('list_ship'));
    }
    public function removemethod($id){
        DB::table('shipping_method')->where('id','=',$id)->delete();
        return redirect()->route("listaddmethodship");
    }
    //sửa method
   public function editmethodship($id){
       $edit = DB::table('shipping_method')->where('id',$id)->first();
        return view('Admin.ship_method.edit_method_ship',['edit'=> $edit,'id'=>$id]);
    }
    // post update method
    public function posteditmethodship( Request_Method_Ship $request,$id){
        DB::table('shipping_method')->where('id','=',$id)->update(
            [
            'name'=> $request->name,
            'status'=> $request->status
            ]
        );
         return redirect()->route("listaddmethodship");
    }
    // tìm kiếm phương thức giao hàng
     public function searchship(){
        $search_text = $_GET['search'];
        $list_ship= DB::table('shipping_method')->where('name','like','%'.$search_text.'%')->get();
        return view('Admin.ship_method.searchship',compact('list_ship'));
    }
}
