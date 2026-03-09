<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Event::class;

    public function definition(): array
    {
        $venues = [
            'Tramshed',
            'Clwb Ifor Bach',
            'The Globe',
            'Depot',
            'Buffalo Bar',
            'Fuel Rock Club',
            'Cardiff Castle',
            'Motorpoint Arena',
            'St David\'s Hall',
            'The Moon Club',
        ];

        $events = [
            ['name' => '🎵 Live Music Night', 'desc' => 'Amazing local bands playing tonight!'],
            ['name' => '🎭 Comedy Show', 'desc' => 'Stand-up comedy with top Cardiff comedians'],
            ['name' => '🎨 Art Exhibition', 'desc' => 'Opening night - free drinks!'],
            ['name' => '🍺 Pub Quiz', 'desc' => 'Weekly quiz night, £2 entry'],
            ['name' => '🎤 Open Mic', 'desc' => 'All welcome, sign up at 7pm'],
            ['name' => '🎸 Rock Night', 'desc' => 'Live rock bands, late bar'],
            ['name' => '🎹 Jazz Evening', 'desc' => 'Smooth jazz in an intimate setting'],
            ['name' => '🎪 Club Night', 'desc' => 'DJs spinning all night long'],
            ['name' => '🎬 Film Screening', 'desc' => 'Independent film night'],
            ['name' => '📚 Book Launch', 'desc' => 'Meet the author, Q&A session'],
        ];

        $event = $events[array_rand($events)];
        $start = now()->addDays(rand(1, 60))->setHour(19);

        return [
            'name' => $event['name'],
            'description' => $event['desc'],
            'start_datetime' => $start,
            'end_datetime' => $start->copy()->addHours(3),
            'venue_name' => $venues[array_rand($venues)],
            'status' => 'approved',
            'image_link' => 'https://picsum.photos/400/600?random=' . rand(1, 1000),
            'ticket_link' => null,
            'social_link' => null,
            'organiser' => null,
        ];
    }
}
