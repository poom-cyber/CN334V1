<?php

namespace Tests\Unit;

use App\Models\task;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskUnitTest extends TestCase
{
    use RefreshDatabase;
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    
    public function test_user_id()
    {
        // $task = new Task([
        //     'id' => 1,
        //     'description' => "user001",
        // ]);
        // $this->assertEquals(1, $task->user_id);
    }
    
    // description
    // test shema ทดสอบ รองรับภาษาไทย
    public function test_input_thai()
    {
       
    }
    // test shema ทดสอบ รองรับภาษาอังกฤษไหม
    public function test_input_english()
    {
       
    }
    // test shema ทดสอบ ใส่ตัวเลขได้ไหม
    public function test_input_number()
    {
    //     $task = new Task([
    //         'user_id' => 1,
    //         'description' => 1,
    //     ]);

    //     $this->assertEquals(1, $task->description);
    }
    // test shema ทดสอบ ใส่คำสั่ง SQL ได้ไหม
    public function test_input_sql()
    {
       
    }
    // test shema ทดสอบ ความยาวตัวอักษร
    public function test_character_length()
    {
    //     $userInput = 4.5;

    //     $user = User::create([
    //         '12356789' => $userInput
    //       ]);

    //     $this->assertTrue($user->test_character_length());
    }
    // id
    // test shema ทดสอบ เป็น null ได้มั้ย
    public function test_empthy_task()
    {
        $task = new Task([
            'user' => 1,
            'description' => "",
        ]);
        $this->assertEquals(" ", $tassk->description);
    }
    
    // test shema ทดสอบ เป็น integer ได้ไหม
}
