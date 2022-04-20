<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Illuminate\Support\Facades\Schema;


class UserUnitTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    // Test schema user model exist
    public function test_schema_user_model()
    {
        $user = User::factory()->create();

        $this->assertModelExists($user);
    }

    // test shema ทดสอบ เป็น null ได้มั้ย
    public function test_id_detect_null()
    {
        $user = new User([
            'user_id' => "確かに死ぬ",
        ]);
        $this->assertEquals(null, $user->user_id);
    }

    // test shema ทดสอบ เป็น null ได้มั้ย
    public function test_id_detect_japan_language()
    {
        $user = new User([
            'user_id' => null,
        ]);
        $this->assertEquals(null, $user->user_id);
    }

    // Test field ข้อมูลใน Database user
    public function test_user_database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('users', [
                'id', 'name', 'password', 'email'
            ]),
            1
        );
    }



}
