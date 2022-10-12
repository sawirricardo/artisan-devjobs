<?php

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan('devjobs:larajobs')
        ->assertSuccessful();

    artisan('devjobs:vuejobs')
        ->assertSuccessful();
});
