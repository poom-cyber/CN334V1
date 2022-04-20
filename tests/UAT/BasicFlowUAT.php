<?php
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Task;
use App\Models\User;
use Database\Factories\UserFactory;
use Database\Factories\TaskFactory;
use Illuminate\Support\Facades\Schema;

class BasicFlowUAT extends TestCase
 {
    use RefreshDatabase, WithFaker;

    // user สามารถ login ได้หรือไม่
    public function test_login()
    {
        $credential = [
            'email' => 'user@gmail.com',
            'password' => '1234567890'
        ];
        $this->post('login', $credential)
            ->assertRedirect('/');
    }

    // user สามารถ register ได้หรือไม่
    public function test_register()
    {
        $credential = [
            'name' => "poom",
            'email' => 'user@gmail.com',
            'password' => '1234567890'
        ];
        $this->post('register', $credential)
            ->assertRedirect('/');
    }
    // user สามารถเพิ่ม task ได้
    public function test_user_add_task()
    {
        $user = User::factory()->create();
    
        $hasUser = $user ? true : false;

        $this->assertTrue($hasUser);

        $task = new Task([
            'usaer_id' =>$user,
            'description' => null,
        ]);

        $this->assertEquals(null, $task->description);
    }

}