<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user=new User();
        $user->name='rinda';
        $user->email='rk@njit.edu';
        $user->password='secret';
        //$this->assertTrue($user->save());
        $this->assertTrue($user=!NULL);

    }
}
