<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Song;

class SongTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateSong()
    {
        $song = Song::factory()->create([
            'artist' => 'Lola',
            'title' => 'Lolita Lola',

        ]);

        $this->assertDatabaseHas('songs', [
            'artist' => 'Lola',
            'title' => 'Lolita Lola',

        ]);
    }

    public function testUpdateSong()
    {
        $song = Song::factory()->create();

        $song->artist = 'Dolores';
        $song->save();

        $this->assertDatabaseHas('songs', [
            'id' => $song->id,
            'artist' => 'Dolores',
        ]);
    }

    public function testDestroySong()
    {
        $song = Song::factory()->create();

        $song->delete();

        $this->assertDatabaseMissing('son', [
            'id' => $song->id,
        ]);
    }
}
