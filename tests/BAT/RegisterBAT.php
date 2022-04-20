<?php

use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;
use App\Models\User;


class RegisterBAT extends TestCase
{
    use RefreshDatabase;

    // test user create user register
    public function test_new_users_can_register()
    {
        if (!Features::enabled(Features::registration())) {
            return $this->markTestSkipped('Registration support is not enabled.');
        }

        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    // user กรอก email เป็นภาษา japan
    public function test_user_input_email_japan()
    {
        $this->assertDatabaseHas('users', [
            'email' => '確かに死ぬ@example.com',
        ]);
    }

    // password เป็น null
    public function test_user_input_email_without_add()
    {
        $this->assertDatabaseHas('users', [
            'password' => null,
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
