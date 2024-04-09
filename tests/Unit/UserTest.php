<?php

namespace Tests\Unit;

use App\Models\Bag;
use App\Models\Club;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    public function test_that_a_user_can_be_created(): void
    {
        User::factory()->create();

        $this->assertDatabaseCount('users', 1);
    }

    public function test_that_a_user_can_access_bags(): void
    {
        $user = User::factory()
            ->has(Bag::factory())
            ->create();

        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseCount('bags', 1);

        $bags = $user->bags()->get();

        self::assertNotEmpty($bags);
    }

    public function test_that_a_user_can_access_clubs(): void
    {
        $user = User::factory()
            ->has(Bag::factory()->has(Club::factory()))
            ->create();

        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseCount('bags', 1);
        $this->assertDatabaseCount('clubs', 1);

        $clubs = $user->clubs()->get();

        self::assertNotEmpty($clubs);
    }
}
