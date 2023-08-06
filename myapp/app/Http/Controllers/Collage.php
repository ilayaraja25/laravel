<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class Collage extends Controller
{
    public function Create(){
return view('College');
    }
public function update(Request $request){
 //$data=$request->only(['fname','date','Address','Department','number','gender','blood']);
 $data=$request->only(['Name','Address','Department','Phone_Number','Gender','Blood_group']);
$staff=Staff::create($data);
}

public function list(){

    $staffs=Staff::all();
    return view ('list_user',['staffs'=>$staffs]);
}
public function edit($id){
    $staff=Staff::find($id);
    return view ('edit_user',['staff'=>$staff]);
}
public function updates(Request $request,$id){
$staff=Staff::find($id);

$staff->Name=$request->input('Name');
$staff->Address=$request->input('Address');
$staff->Department=$request->input('Department');
$staff->Phone_Number=$request->input('Phone_Number');
$staff->Gender=$request->input('Gender');
$staff->Blood_group=$request->input('Blood_group');
$staff->save();
return 'Staff updates successfully <a href="'.url('list').'">Click here to see list</a>';
}
public function delete($id){
    $staff=Staff::find($id);
    $staff->delete();
    return 'Staff deleted successfully <a href="'.url('list').'">Click here to see list</a>';
}
}
