<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Event;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class CRUDEventTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    /*public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }  */

    public function test_listEventAppearInHomeView(){
        $this ->withExceptionHandling();

        $events = Event::factory(2)->create();
        $event = $events[0];

        $response = $this->get('/');

        $response->assertSee($event->name);

        $response->assertStatus(200)->assertViewIs('home');
    }

    public function test_anEventCanBeDeleted(){
        $this->withExceptionHandling();

        $event = Event::factory()->create();
        $this->assertCount(1, Event::all());

        $response = $this->delete(route('deleteEvent', $event->id));

        $this->assertCount(0, Event::all());

    }

    public function test_anEventCanBeCreate() {
        $this->withExceptionHandling();

        $response = $this->post(route('storeEvent'), 
        [
            'name' => 'name',
            'description' => 'description',
            'spaces' => '80',
            'img' => 'img',
            'datetime' => '2023/02/18 18:00:00'
        ]);

        $this->assertCount(0, Event::all());
    }

    public function test_anEventCanBeUpdated() {
        $this->withExceptionHandling();

        $event = Event::factory()->create();
        $this->assertCount(1, Event::all());

        $response = $this->patch(route('updateEvent', $event->id),['name' =>'New Name']);
        $this->assertEquals('New Name', Event::first()->name);

    }
}


