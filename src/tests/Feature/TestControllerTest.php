<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_can_store()
    {
        $data = [
            'name' => 'John Doe',
            'age' => 25,
            'address' => '123 Main St',
            'tel' => '09012345678',
        ];

        $response = $this->post(route('store'),$data);

        $this->assertDatabaseHas('tests',[
            'name' => 'John Doe',
            'age' => 25,
            'address' => '123 Main St',
            'tel' => '09012345678',
        ]);

        $response->assertRedirect(route('detail'));

        $response->assertSessionHas('message','データが追加されました');
    }
}
