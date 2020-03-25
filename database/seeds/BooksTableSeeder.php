<?php

use Illuminate\Database\Seeder;
use App\Book;
use Faker\Generator as Faker;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $newBook = new Book;
        $newBook->title = $faker->word;
        $newBook->author = $faker->name;
        $newBook->genre = $faker->name;
        $newBook->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
        $newBook->price =
        $faker->randomFloat($nbMaxDecimals = 2, $min = 30, $max = 9999);
        $newBook->date_production = '2019-01-01';
        $newBook->save();
      }
    }
}
