<?php
namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class LaravelInsertUpdateDelete extends Controller{
    
    //Insert method 
    //DB::table('users')->insert(['mail'=>'dhiraj@example.com', 'votes'=0]);
    function Insert(Request $request){
        $name= $request->input("name");
        $roll= $request->input("roll");
        $city= $request->input("city");
        $phone= $request->input("phone");
        $class= $request->input("class");
        $result= DB::table('student_details')->insert(['name'=>$name, 'roll'=>$roll, 'city'=>$city, 'phone'=>$phone, 'class'=>$class]);
        if($result == true){
            return "Data Insert Successfully.";
        }else{
            return "Data Insert Fail? Try Again.";
        }
    }

    //Update method
    //DB::table('users')->where('id',1)->update('votes'=>1);
    function Update(Request $request){
        $name= $request->input("name");
        $id= $request->input("id");
        $result= DB::table('student_details')->where('id',$id)->update(['name'=>$name]);
        if($result == true){
            return "Data Update Successfully.";
        }else{
            return "Data Update Fail? Try Again.";
        }
    }

    
    //Delete method
    //DB::table('users')->where('votes','>',100)->delete();
    function Delete(Request $request){
        $id= $request->input("id");
        $result= DB::table('student_details')->where('id',$id)->delete();
        if($result == true){
            return "Data Delete Successfully.";
        }else{
            return "Data Delete Fail? Try Again.";
        }
    }
}