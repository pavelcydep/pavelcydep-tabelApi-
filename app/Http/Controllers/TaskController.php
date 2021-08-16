<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
  

  public function tasksJune()
  {
      $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20210701)
      AND Дата_и_время_старта_задачи < (20210730)  -- i.e. 00:00 of the next day');
      return response()->json($tasks,200);
      
  }
  
  public function tasksJuly()
  {
      $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20210801)
      AND Дата_и_время_старта_задачи < (20210830)  -- i.e. 00:00 of the next day');
      return response()->json($tasks,200);
      
  }
 

  

    public function tabelTask(){
        return response()->json(Task::get(),200);
    }
    public function tabelTaskById($id){
        $tabel=Task::find($id);
        if (is_null($tabel)){
        return response()->json(['error'=>true, 'message'=>'Not found'],404);}
        return response()->json($tabel,200);
    } 

    public function tabelTaskSave(Request $req){
      $tabel = Task::create($req->all());
        return response()->json($tabel,201);
    } 

    public function tabelTaskEdit(Request $req, $id){
      $tabel= Task::find($id);
      if (is_null($tabel)){
      return response()->json(['error'=>true, 'message'=>'Not found'],404);}

      $tabel->update($req->all());
      return response()->json($tabel,200);
  } 
  public function tabelTaskDelete(Request $req, $id){
    $tabel=Task::find($id);
    if (is_null($tabel)){
    return response()->json(['error'=>true, 'message'=>'Not found'],404);}
   $tabel->delete();
    return response()->json('',204);
}

}
