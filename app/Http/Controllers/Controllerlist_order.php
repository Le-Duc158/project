<?php

namespace App\Http\Controllers;
use App\ModelList_order;
use Illuminate\Http\Request;

class Controllerlist_order extends Controller
{
    public function list_order(){
        $transactions = ModelList_order::paginate(3);
        return view("Admin/order/listorder",[ 'transactions' =>  $transactions]);
    }
    // xóa đơn hàng
     public function removelist_order($id){
        DB::table('order')->where('id','=',$id)->delete();
        return redirect("admin/order/listorder");
    }
}
