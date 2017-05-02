<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class KantorenTest extends TestCase
{
    use DatabaseMigrations;
    
    /** @test */
    function a_user_can_see_all_offices(){
        $kantoor = factory('App\Kantoor')->create();
        $this->get('/kantoren')
            ->assertSee($kantoor->name);
    }

    /** @test */
    function a_user_can_view_a_specific_office(){
        $kantoor = factory('App\Kantoor')->create();
        $this->get("/kantoren/{$kantoor->slug}")
            ->assertSee($kantoor->name);
    }
}
