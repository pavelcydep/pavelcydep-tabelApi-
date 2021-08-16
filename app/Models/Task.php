<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $tabel="tasks";
    public $timestamps=false;
    protected $fillable=[
        'id',
        'id_пользователя',
        'Наименование_задачи',
        'Время_выделенное_на_выполнение_задачи_в_часах',
        'Время_затраченное_на_выполнение_задачи_в_часах',
        'Дата_и_время_старта_задачи'
    ];
}
