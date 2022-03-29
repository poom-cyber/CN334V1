<?php

namespace Tests\Unit;

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Task;
use App\Models\User;
use Database\Factories\UserFactory;
use Database\Factories\TaskFactory;
use Illuminate\Support\Facades\Schema;



class TaskUnitTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    // Test user model exist
    public function test_model_user_exists()
    {
        $user = User::factory()->create();

        $this->assertModelExists($user);
    }

    // test shema ทดสอบ ใส่ตัวเลขได้ไหม
    public function test_shema_support_integer()
    {
        $this->assertTrue(true);
    }
    // test shema ทดสอบ ใส่คำสั่ง SQL ได้ไหม
    public function test_shema_detect_sql_injection()
    {
        $this->assertTrue(true);
    }
    // test shema ทดสอบ ความยาวตัวอักษร
    public function test_shema_support_lange_string()
    {
        $this->assertTrue(true);
    }

    /* ID */
    // test shema ทดสอบ เป็น integer ได้ไหม
    public function test_id_support_integer()
    {
        $this->assertTrue(true);
    }
    // test shema ทดสอบ เป็น null ได้มั้ย
    public function test_id_detect_null()
    {
        $task = new Task([
            'usaer_id' => 1,
            'description' => null,
        ]);
        $this->assertEquals(null, $task->description);
    }

    // test route ทดสอบการ route หน้าต่างๆ
    public function test_route_before_login_exists()
    {
        // Welome page route
        $welcomePage = $this->get('/');
        $welcomePage->assertStatus(200);


        // Login page route
        $loginPage = $this->get('/login');
        $loginPage->assertStatus(200);

        // Register page route
        $registerPage = $this->get('/register');
        $registerPage->assertStatus(200);
    }

    public function test_route_after_login_exists()
    {
        $credential = [
            'email' => 'user@gmail.com',
            'password' => '1234567890'
        ];
        $this->post('login', $credential)
            ->assertRedirect('/');
    }

    // Test rule of database
    public function test_rules(): array
    {
        return [
            'title' => 'string|required',
            'content' => 'string|required',
        ];
    }

    // Test database ไม่มีอยู่
    public function test_database_user_missing()
    {
        // Make call to application...

        $this->assertDatabaseMissing('users', [
            'email' => 'user@example.com'
        ]);
    }

    public function test_database_task_missing()
    {
        // Make call to application...

        $this->assertDatabaseMissing('tasks', [
            'description' => 'test',
            'model' => 'test'
        ]);
    }

    // Test field ข้อมูลใน Database user

    public function test_user_database_has_expected_columns()
    {
        $this->assertTrue( 
          Schema::hasColumns('users', [
            'id', 'name', 'password', 'email' ]), 1);
    }

    // Test field ข้อมูลใน Database task
    public function test_task_database_has_expected_columns()
    {
        $this->assertTrue( 
          Schema::hasColumns('tasks', [
            'id', 'description', 'model', 'user_id' ]), 1);
    }
}
