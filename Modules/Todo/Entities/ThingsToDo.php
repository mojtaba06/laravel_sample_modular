<?php

namespace Modules\Todo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThingsToDo extends Model
{

    protected $table = "todo_things_to_dos";
    protected $fillable = ["title", "is_done"];
}
