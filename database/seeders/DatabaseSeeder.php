<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\User;
use App\Models\Thema;
use App\Models\Author;
use App\Models\Review;
use App\Models\Distributor;
use Illuminate\Database\Seeder;
use Database\Factories\ReviewFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

        for ($i=0; $i < 20; $i++) { 
            
            $author = Author::factory()->create();
            $thema = Thema::factory()->create();
            $distributor = Distributor::factory()->create();

            $book = Book::factory()->create([
                'thema_id' => $thema->id,
                'author_id' => $author->id,
                'distributor_id' => $distributor->id
               
            ]);
            Review::factory(5)->create([
                'user_id' => User::factory()->create()->id,
                'book_id' => $book->id
            ]);
        }
    }
}
