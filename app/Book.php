<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = [
      'isbn',
      'author',
      'title',
      'genre',
      'description',
      'price',
      'date_production',
      'updated_at'
  ];
}
