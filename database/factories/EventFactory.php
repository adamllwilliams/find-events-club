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
        $cardiffVenues = [
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

        $eventTypes = [
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

        $event = $this->faker->randomElement($eventTypes);
        $startDate = $this->faker->dateTimeBetween('now', '+2 months');
        $endDate = (clone $startDate)->modify('+3 hours');

        return [
            'name' => $event['name'],
            'description' => $event['desc'],
            'start_datetime' => $startDate,
            'end_datetime' => $endDate,
            'venue_name' => $this->faker->randomElement($cardiffVenues),
            'status' => 'approved',
            'image_link' => 'https://picsum.photos/seed/' . $this->faker->numberBetween(1, 1000) . '/400/600',
            'ticket_link' => $this->faker->optional(0.5)->url(),
            'social_link' => $this->faker->optional(0.3)->url(),
            'organiser' => $this->faker->optional(0.4)->name(),
        ];
    }
}
