<?php
use Tests\TestCase;
use App\Models\Task;

class EditTaskBAT extends TestCase {

    // user edit one task
    public function test_edit_one_task()
    {
        $this->assertDatabaseMissing('tasks', [
            'description' => 'test',
            'model' => 'test'
        ]);
    }

    // user edit description 
    public function test_edit_description()
    {
        $this->assertDatabaseMissing('tasks', [
            'description' => 'update data',
        ]);
    }
    
    // user edit model 
    public function test_edit_model()
    {
        $this->assertDatabaseMissing('tasks', [
            'model' => 'update data',
        ]);
    }

}