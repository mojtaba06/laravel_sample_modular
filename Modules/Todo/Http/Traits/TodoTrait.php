<?php

namespace Modules\Todo\Http\Traits;

use Modules\Todo\Entities\ThingsToDo;

trait ToDoTrait
{

    public function getTodoList($paginate_size = 10)
    {
        return ThingsToDo::paginate($paginate_size = 10);
    }

    public function markAsDone($todo_id)
    {
        $item = ThingsToDo::find($todo_id);
        $item->update([
            "is_done" => !$item->is_done
        ]);
    }
}
