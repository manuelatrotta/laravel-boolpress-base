<?php

use Illuminate\Database\Seeder;
use App\Cd;
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
        $newShoe->author = $faker->name;
        $newShoe->genre = $faker->name;
        $newShoe->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
        $newShoe->price =
        $faker->randomFloat($nbMaxDecimals = 2, $min = 30, $max = 9999);
        $newShoe->date_production = '2019-01-01';
        $newShoe->save();
    }
}
