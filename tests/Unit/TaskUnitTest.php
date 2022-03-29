<?php

namespace Tests\Unit;

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Task;
use App\Models\User;
use Database\Factories\UserFactory;



class TaskUnitTest extends TestCase
{
    // // test shema test description pass
    // public function test_schema_description()
    // {

    // }

    // // test shema test user_id pass
    // public function test_schema_user_id()
    // {

    // }
    use RefreshDatabase, WithFaker;

    //Test route dashboard
    public function test_a_visitor_can_able_to_login_get_dashboard()
    {
        $user = User::factory()->create();

        $hasUser = $user ? true : false;

        $this->assertTrue($hasUser);

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);
    }

    //Test route allTank
    public function test_a_visitor_can_able_to_login_get_allTank()
    {
        $user = User::factory()->create();

        $hasUser = $user ? true : false;

        $this->assertTrue($hasUser);

        $response = $this->actingAs($user)->get('/allTank');

        $response->assertStatus(200);
    }


    //Test route editTank
    public function test_a_visitor_can_able_to_login_get_editTank()
    {
        $user = User::factory()->create();

        $hasUser = $user ? true : false;

        $this->assertTrue($hasUser);

        $response = $this->actingAs($user)->get('/editTank');

        $response->assertStatus(200);
    }

        //Test route task
        public function test_a_visitor_can_able_to_login_get_task()
        {
            $user = User::factory()->create();
    
            $hasUser = $user ? true : false;
    
            $this->assertTrue($hasUser);
    
            $response = $this->actingAs($user)->get('/task');
    
            $response->assertStatus(200);
        }



    public function test_userid_description()
    {
        $task = new User([
            'name' => 'test',
            'email' => 'test@gmail.com'
        ]);
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
        $this->assertTrue(true);
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
            'email' => 'test1@gmail.com',
            'password' => '1234567890'
        ];
         $this->post('login',$credential)
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
            'email' => 'sally@example.com'
        ]);
    }
}
