<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\get;

uses(RefreshDatabase::class);

it('gives back a successful response for home page', function(): void {
    // Act & Assert
    get('/')
        ->assertOk();
});
