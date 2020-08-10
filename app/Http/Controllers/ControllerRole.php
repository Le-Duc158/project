<?php

namespace App\Http\Controllers;
use App\ModelRole;
use Illuminate\Http\Request;
use DB;
class ControllerRole extends Controller
{
    public function addrole(){
      return view("Admin/role/addrole");
  }
  public function postaddrole( Request $request){
      $addrole = new ModelRole;
      $addrole->permissions = $request->permissions;
      $addrole->save();
      return redirect()->route("listrole");
  }
  public function listrole (){
    $listrole=  DB::table('role')->paginate(3);
    return view('Admin.role.listrole',["listrole"=>$listrole]);
}
  // xóa phân quyền
public function removerole($id){
  DB::table('role')->where('id',$id)->delete();
  return redirect()->route("listrole");
}
public function editrole(Request $reuest,$id){
       $edit = DB::table('role')->where('id',$id)->first();
        return view('Admin.role.editrole',['edit'=> $edit,'id'=>$id]);
}
public function posteditrole(Request $request,$id){
    DB::table('role')->where('id','=',$id)->update(
        [
            'permissions'=> $request->permissions,
        ]
    );
    return redirect()->route("listrole");
}
}
