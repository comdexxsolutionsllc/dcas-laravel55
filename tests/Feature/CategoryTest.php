<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_authorized_user_can_view_categories()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /** @test */
    public function an_unauthorized_user_cannot_view_categories()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /** @test */
    public function a_user_cannot_update_categories()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /** @test */
    public function an_admin_can_update_categories()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /** @test */
    public function a_user_cannot_delete_categories()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /** @test */
    public function a_superuser_can_delete_categories()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
