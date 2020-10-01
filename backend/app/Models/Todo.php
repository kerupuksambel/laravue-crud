<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todo';
    protected $primarykey = 'todo_id';
    protected $fillable = [
        'todo_judul',
        'todo_isi',
        'todo_deadline',
    ];
}
