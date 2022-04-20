<?php
use Tests\TestCase;
use App\Models\User;

class LoginBAT extends TestCase {

    // user กรอก email เป็นภาษา japan
    public function test_user_input_email_japan()
    {
        $this->assertDatabaseHas('users', [
            'email' => '確かに死ぬ@example.com',
        ]);
    }

    // กรอก email โดยไม่มี @ 
    public function test_user_input_email_without_add()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'sallyexample.com',
        ]);
    }

    // email ใช้ภาษาไทยเเละ eng
    public function test_user_input_email_in_english_and_thai()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'sallyทดสอบ@example.com',
        ]);
    }

    // name เป็น null
    public function test_name_detect_null()
    {
        $user = new User([
            'name' => null,
        ]);
        $this->assertEquals(null, $user->name);
    }

    // email เป็น null
    public function test_email_detect_null()
    {
        $user = new User([
            'email' => null,
        ]);
        $this->assertEquals(null, $user->email);
    }

}