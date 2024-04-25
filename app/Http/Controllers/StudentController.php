<?php

namespace App\Http\Controllers;
use  Illuminate\Support\Facades\Auth;
use App\Models\student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 
class StudentController extends Controller
{
    
public function index(){

$data = student::get();
return view('student-list', compact('data'));


}
 
 
// also create
public function addstudent(){


return view('add-student');


}  


//also mean store
public function savestudent(request $request){

//dd($request->all());

$request->validate([


    'name' =>'required',
    'email' =>'required|email',
    'phone' => 'required',
    'address'=>'required'


]);

 
//this values get from the input form in addstudent
$name = $request->name;
$email= $request->email;
$phone =$request->phone;
$address =$request->address;

 

//saving values from input form to database with approp coloum name.
$stu = new student();
$stu->name=$name;
$stu->email=$email;
$stu->phone=$phone;
$stu->address=$address;
$stu->save();


//return redirect ( url('student-list'));
//return redirect()->back()->with('success', 'student add successfully');

//return redirect()->back()->with('success', 'New Student Added successfully!');
return redirect( url('student-list'))->with('success', 'New Student Added successfully!');

}



//also mean edit
public function editstudent($id){


    $data = student::where('id', '=', $id )->first();

    return view('edit-student', compact('data'));



}


//also mean update
public function updatestudent(request $request){

    
$request->validate([


    'name' =>'required',
    'email' =>'required|email',
    'phone' => 'required',
    'address'=>'required'


]);

//this values get from the input form in editstudent.balde
$id = $request->id;
$name = $request->name;
$email= $request->email;
$phone =$request->phone;
$address =$request->address;

student::where('id', '=', $id )->update([

'name' =>$name,
'email' =>$email,
'phone' =>$phone,
'address'=>$address



]);


return redirect( url('student-list'))->with('success', ' Student updated successfully!');
}








public function deletestudent($id){


student::where('id', '=', $id )->delete();

return redirect( url('student-list'))->with('success', ' Student deleted successfully!');



}

}
