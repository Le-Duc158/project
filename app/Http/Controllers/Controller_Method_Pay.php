<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_Method_Pay;
use App\Http\Requests\Request_Method_Pay;
use DB;

class Controller_Method_Pay extends Controller
{
    // post method pay
    public function postlistmethodpay(Request_Method_Pay $request){
        $addmethodpay = new Model_Method_Pay;
        $addmethodpay->name = $request->name;
        $addmethodpay->status = $request->status;
        $addmethodpay->save();
        return redirect()->route("listaddmethodpay");
    }
    public function getaddmethodpay(){
        return view("Admin/method_pay/add_method_pay");
    }
    // danh sách phương thức
    public function listaddmethodpay(){
        $list_pay = DB::table('payment_method')->paginate(3);
        return view('Admin.method_pay.list_method_pay',compact('list_pay'));
    }


    // xóa phương thức thanh toán
    public function removemethodpay($id){
        DB::table('payment_method')->where('id','=',$id)->delete();
        return redirect()->route("listaddmethodpay");
    }


    //sửa method
    public function editmethodpay($id){
     $edit = DB::table('payment_method')->where('id',$id)->first();
     return view('Admin.method_pay.edit_method_pay',['edit'=> $edit]);
 }


    // post update method
 public function posteditmethodpay( Request_Method_Pay $request,$id){
    DB::table('payment_method')->where('id','=',$id)->update(
        [
            'name'=> $request->name,
            'status'=> $request->status,
        ]
    );
    return redirect()->route("listaddmethodpay");
}
  // tìm kiếm phương thức thanh toán
     public function searchpay(){
        $search_text = $_GET['search'];
        $list_pay= DB::table('payment_method')->where('name','like','%'.$search_text.'%')->get();
        return view('Admin.method_pay.searchpay',compact('list_pay'));
    }
}
