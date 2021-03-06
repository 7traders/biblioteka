<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Publisher;


class Book extends Model
{
    use HasFactory;

    public function bookAuthor()
    {
        // return $this->belongsTo(Author::class, 'author_id', 'id');       //po laiko pas Arvyda kitaip parasyta, palikau sena
        return $this->belongsTo('App\Models\Author', 'author_id', 'id');
    }
    

    public function bookPublisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }

}
