<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\ActorMovie;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class ActorMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = Actor::all();
        $movies = Movie::all();

        foreach ($actors as $actor) {
            for ($i = 0; $i < rand(2, 5); $i++) {
                $am = new ActorMovie();
                $am->movie_id = $movies->random()->movie_id;
                $am->actor_id = $actor->actor_id;
                $am->save();
            }
        }
    }
}
