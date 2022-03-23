<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Schema;

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

    public function test_users_database_has_expected_columns()
    {
        $this->assertTrue( 
          Schema::hasColumns('users', [
            'id','name', 'email', 'email_verified_at', 'password'
        ]), 1);
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
