<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Sales;


class UserTest extends TestCase
{
    public function test_sales_creation()
    {
    $sales = Sales::factory()->create();
    $this->assertDatabaseHas('sales', ['id' => $sales->id]);
    }


}
