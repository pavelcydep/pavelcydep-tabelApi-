<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_job extends Model
{
   
        //use HasFactory;
        protected $tabel="user_jobs";
        public $timestamps=false;
        protected $fillable=[
            'id',
            'Полное_имя',
            'Логин',
            'Роли',
            'Активность'
        ];
    

}
