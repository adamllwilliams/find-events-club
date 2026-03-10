<?php

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('shows events feed placeholder', function (): void
    {
        $this->get('/')
            ->assertSeeText('No events yet. Be the first to post!');
    });

it('shows events feed', function (): void
    {
        $events = [
            ['name'=> '🎭 Comedy Show', 'description' => 'Stand-up comedy with top Cardiff comedians'],
            ['name'=> '🎨 Art Exhibition', 'description' => 'Opening night - free drinks!'],
            ['name'=> '🍺 Pub Quiz', 'description' => 'Weekly quiz night, £2 entry'],
        ];
        // Arrange
        Event::factory()->create($events[0]);
        Event::factory()->create($events[1]);
        Event::factory()->create($events[2]);

        // Act & Assert
        $this->get('/')
            ->assertSeeText([
                $events[0]['name'],
                $events[0]['description'],
                $events[1]['name'],
                $events[1]['description'],
                $events[2]['name'],
                $events[2]['description'],
                ]);
    });

it('shows events by latest first', function (): void
    {
        // Arrange
        // Act
        // Assert
    });
