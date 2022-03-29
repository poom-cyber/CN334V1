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


    public function test_userid_description()
    {
        $task = new Task([
            'id' =>  1,
            'description' => 'test'
        ]);
    }

    public function test_userid_description_user()
    {
        $task = new User([
            'id' =>  1,
            'email' => 'test@gmail.com'
        ]);
    }

    public function test_route_exists()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

 
        // ...
    }
    public function test_rules(): array
{
    return [
        'title' => 'string|required',
        'content' => 'string|required',
    ];
}

public function test_database_user_missing()
{
    // Make call to application...
 
    $this->assertDatabaseMissing ('users', [
        'email' => 'sally@example.com'
    ]);


}


    // description
    // test shema ทดสอบ รองรับภาษาไทย
    // test shema ทดสอบ รองรับภาษาอังกฤษไหม
    // test shema ทดสอบ ใส่ตัวเลขได้ไหม
    // test shema ทดสอบ ใส่คำสั่ง SQL ได้ไหม
    // test shema ทดสอบ ความยาวตัวอักษร
    
    // id
    // test shema ทดสอบ เป็น null ได้มั้ย
    // test shema ทดสอบ เป็น integer ได้ไหม
}
