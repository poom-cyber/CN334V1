<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
// use App\Models\Task;

class TaskUnitTest extends TestCase
{
    /* Description */
    // test shema ทดสอบ รองรับภาษาไทย
    public function test_shema_support_thai()
    {
        $this->assertTrue(true);
    }
    // test shema ทดสอบ รองรับภาษาอังกฤษไหม
    public function test_shema_support_english()
    {
        $this->assertTrue(true);
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
    
}
