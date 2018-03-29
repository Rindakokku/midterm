<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;


class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Car::find(10);
        if (!is_null($car)) {
            $car->destroy(10);
            $this->assertTrue($car->save());
        }
        $this->assertTrue($carr = !NULL);
    }
}
