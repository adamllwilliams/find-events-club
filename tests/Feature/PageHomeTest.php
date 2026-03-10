<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('shows events feed placeholder', function (): void {
    $this->get('/')
        ->assertSeeText('No events yet. Be the first to post!');
});
