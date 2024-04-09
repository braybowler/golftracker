<?php

namespace Tests\Unit;

use App\Models\Bag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BagTest extends TestCase
{
    use RefreshDatabase;

    public function test_that_a_bag_can_be_created(): void
    {
        Bag::factory()->create();

        $this->assertDatabaseCount('bags', 1);
    }

    public function test_that_a_bag_can_access_user(): void
    {
        $bag = Bag::factory()->create();

        $this->assertDatabaseCount('bags', 1);

        $user = $bag->user()->get();

        self::assertNotEmpty($user);
    }
}
