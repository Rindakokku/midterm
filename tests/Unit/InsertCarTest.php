<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user=new Car();
        $user->make='honda';
        $user->model='crv';
        $user->year='2016';
        //$user->save();
        $this->assertTrue($user=!NULL);
    }
}
