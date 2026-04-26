<?php

use Tests\TestCase;
use App\Models\Event;

class EventTest extends TestCase
{
    public function test_events_page_loads()
    {
        $response = $this->get('/events');

        $response->assertStatus(200);
    }

    public function test_event_can_be_created()
    {
        $event = Event::create([
            'name' => 'Test Event',
            'event_type_id' => 1
        ]);

        $this->assertDatabaseHas('events', [
            'name' => 'Test Event'
        ]);
    }
}
