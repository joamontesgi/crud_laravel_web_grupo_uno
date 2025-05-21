<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        $books = [
            [
                'category_id' => 1,
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'price' => 10.99,
            ],
            [
                'category_id' => 1,
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'price' => 12.99,
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
