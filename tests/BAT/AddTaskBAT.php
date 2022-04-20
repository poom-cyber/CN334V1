<?php
use Tests\TestCase;
use App\Models\Task;

class AddTaskBAT extends TestCase {

    // user add one task with null id
    public function test_user_add_with_null()
    {
        $task = new Task([
            'id' => null,
        ]);
        $this->assertEquals(null, $task->user_id);
    }

    // add task with null description
    public function test_user_add_with_description_null()
    {
        $task = new Task([
            'description' => null,
        ]);
        $this->assertEquals(null, $task->description);
    }

    // add task with null model
    public function test_user_add_with_model_null()
    {
        $task = new Task([
            'model' => null,
        ]);
        $this->assertEquals(null, $task->model);
    }

    // add task with japan language description
    public function test_user_add_with_description_japan_language()
    {
        $task = new Task([
            'description' => "確かに死ぬ",
        ]);
        $this->assertEquals("確かに死ぬ", $task->description);
    }

}