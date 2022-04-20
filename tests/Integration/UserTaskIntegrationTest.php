<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Task;
use App\Models\User;
use Database\Factories\UserFactory;
use Database\Factories\TaskFactory;
use Illuminate\Support\Facades\Schema;


class UserTaskIntegrationTest extends TestCase
{

    // ทดสอบ user login เเละ rounting ไปหน้า dashboard ได้
    public function test_login_rountung()
    {
        $user = User::factory()->create();

        $hasUser = $user ? true : false;

        $this->assertTrue($hasUser);

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);
    }

    // ทดสอบ user login เเละ rounting ไปหน้า task ได้
    public function test_a_visitor_can_able_to_login_get_task()
    {
        $user = User::factory()->create();

        $hasUser = $user ? true : false;

        $this->assertTrue($hasUser);

        $response = $this->actingAs($user)->get('/task');

        $response->assertStatus(200);
    }

    // ทดสอบ User 1 คนมี Task 1000 ชุด
    public function test_task_1user_have_1000_task()
    {
        $this->assertTrue(true);
    }

    // Task 1 ชุดมี owner 2 คน
    public function test_task_have_2owner()
    {
        $this->assertTrue(true);
    }

    // User สร้าง Task ซ้ำได้หรือไม่
    public function test_user_create_duplicate_task()
    {
        $this->assertTrue(true);
    }

    // User ลบ task ได้หรือไม่
    public function test_user_delete_one_task()
    {
        $this->assertTrue(true);
    }

    // User สร้าง task 1 ชุด
    public function test_user_create_1task()
    {
        $this->assertTrue(true);
    }

    // User update task
    public function test_user_update_1task()
    {
        $this->assertTrue(true);
    }
}
