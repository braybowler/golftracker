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
            ->create();

        Club::create([
            'user_id' => $user->id,
        ]);

        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseCount('clubs', 1);

        $clubs = $user->clubs()->get();

        self::assertNotEmpty($clubs);
    }

    public function test_that_a_user_can_access_clubs_in_a_specific_bag(): void
    {
        $user = User::factory()
            ->create();

        $bag = Bag::create([
            'user_id' => $user->id
        ]);

        $clubInBag = Club::create([
            'user_id' => $user->id,
            'bag_id' => $bag->id,
        ]);

        $clubNotInBag = Club::create([
            'user_id' => $user->id,
        ]);

        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseCount('bags', 1);
        $this->assertDatabaseCount('clubs', 2);

        $clubs = $user->clubsInBag()->get();

        self::assertTrue($clubs->contains($clubInBag));
        self::assertTrue($clubs->doesntContain($clubNotInBag));
    }
}
