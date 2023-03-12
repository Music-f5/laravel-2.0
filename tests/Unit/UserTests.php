<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateUser()
    {
        $user = User::factory()->create([
            'name' => 'Pepita',
            'email' => 'pepita@gmail.com',
            'password' => 'pepita',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'Pepita',
            'email' => 'pepita@gmail.com',
            'password' => 'pepita',
        ]);
    }

    public function testUpdateUser()
    {
        $user = User::factory()->create();

        $user->name = 'Maya';
        $user->save();

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'Maya',
        ]);
    }

    public function testDestroyUser()
    {
        $user = User::factory()->create();

        $user->delete();

        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
        ]);
    }
}
