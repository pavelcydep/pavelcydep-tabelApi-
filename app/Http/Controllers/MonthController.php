<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function tasksJan()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20210101)
        AND Дата_и_время_старта_задачи < (20210130)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }

    public function tasksFev()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20210201)
        AND Дата_и_время_старта_задачи < (20210230)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }

    public function tasksMart()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20210301)
        AND Дата_и_время_старта_задачи < (20210330)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }
    public function tasksApr()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20210401)
        AND Дата_и_время_старта_задачи < (20210430)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }

    public function tasksMay()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20210501)
        AND Дата_и_время_старта_задачи < (20210530)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }

    public function tasksJune()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20210601)
        AND Дата_и_время_старта_задачи < (20210630)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }
    
    public function tasksJuly()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20210701)
        AND Дата_и_время_старта_задачи < (20210730)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }
   
    public function tasksAug()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20210801)
        AND Дата_и_время_старта_задачи < (20210830)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }
    public function tasksSent()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20210901)
        AND Дата_и_время_старта_задачи < (20210930)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }

    public function tasksOct()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20211001)
        AND Дата_и_время_старта_задачи < (20211030)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }
    public function tasksNov()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20211101)
        AND Дата_и_время_старта_задачи < (20211130)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }
    public function tasksDec()
    {
        $tasks = DB::select('select * from tasks WHERE Дата_и_время_старта_задачи >= (20211201)
        AND Дата_и_время_старта_задачи < (20211230)  -- i.e. 00:00 of the next day');
        return response()->json($tasks,200);
        
    }
}
