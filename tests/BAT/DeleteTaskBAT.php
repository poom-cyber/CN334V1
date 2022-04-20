<?php

use Tests\TestCase;
use App\Models\Task;

class DeleteTaskBAT extends TestCase
{

    // user delete one 
    public function test_edit_one_task()
    {
        $user = Task::factory()->create();

        $user->delete();

        $this->assertModelMissing($user);
    }

}
