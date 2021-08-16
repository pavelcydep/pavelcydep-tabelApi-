<?php

namespace App\Http\Controllers;
use App\Models\User_Job;
use Illuminate\Http\Request;

class UserJobsController extends Controller
{
    public function tabel(){
        return response()->json(User_Job::get(),200);
    }

    public function tabelById($id){
        $tabel= User_Job::find($id);
        if (is_null($tabel)){
        return response()->json(['error'=>true, 'message'=>'Not found'],404);}
        return response()->json($tabel,200);
    } 
    //POST
   public function tabelSave(Request $req){
        /*  $rules=[
           'iso' => 'requred|min:2|max:2',
           'Логин' => 'requred|min:2|max:2',
       ];
       $validator = Validator::make($req->all(),$rules);
       if ($validator->fails()){
           return response()->json($validator->errors(),400);
       }*/
        $tabel = User_Job::create($req->all());
        return response()->json($tabel,201);
    } 
//ДОБАВЛЕНИЕ
    public function tabelEdit(Request $req, $id){
          /* $rules=[
            'iso' => 'requred|min:2|max:2',
            'Логин' => 'requred|min:2|max:2',
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->fails()){
            return response(['errors'=>$validator->all()],422);
        }*/

        $tabel= User_Job::find($id);
        if (is_null($tabel)){
        return response()->json(['error'=>true, 'message'=>'Not found'],404);}

        $tabel->update($req->all());
        return response()->json($tabel,200);
    } 
//УДАЛЕНИЕ ОТВЕТОВ
    public function tabelDelete(Request $req, $id){
        $tabel= User_Job::find($id);
        if (is_null($tabel)){
        return response()->json(['error'=>true, 'message'=>'Not found'],404);}
       $tabel->delete();
        return response()->json('',204);
}



}
