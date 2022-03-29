<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Task;
use App\Models\User;
use Database\Factories\UserFactory;


class RoutingTest extends TestCase

{    use RefreshDatabase, WithFaker;


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
    
    

}
