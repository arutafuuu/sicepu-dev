<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    function test_admin_index() : void {
        $this->get('/admin')->assertStatus(200)
        ->assertSeeText('Dashboard');
    }

    function test_admin_404() : void {
        $this->get('/admin/404')->assertStatus(200)
        ->assertSeeText('404');
    }

    function test_admin_blank() : void {
        $this->get('/admin/blank')->assertStatus(200)
        ->assertSeeText('Blank');
    }

    function test_admin_buttons() : void {
        $this->get('/admin/buttons')->assertStatus(200)
        ->assertSeeText('Buttons');
    }

    function test_admin_cards() : void {
        $this->get('/admin/cards')->assertStatus(200)
        ->assertSeeText('Cards');
    }

    function test_admin_charts() : void {
        $this->get('/admin/charts')->assertStatus(200)
        ->assertSeeText('Charts');
    }

    function test_admin_tables() : void {
        $this->get('/admin/tables')->assertStatus(200)
        ->assertSeeText('Tables');
    }

    function test_admin_utilities_animation() : void {
        $this->get('/admin/utilities-animation')->assertStatus(200)
        ->assertSeeText('Animation Utilities');
    }

    function test_admin_utilities_border() : void {
        $this->get('/admin/utilities-border')->assertStatus(200)
        ->assertSeeText('Border Utilities');
    }

    function test_admin_utilities_color() : void {
        $this->get('/admin/utilities-color')->assertStatus(200)
        ->assertSeeText('Color Utilities');
    }

    function test_admin_utilities_other() : void {
        $this->get('/admin/utilities-other')->assertStatus(200)
        ->assertSeeText('Other Utilities');
    }

}
