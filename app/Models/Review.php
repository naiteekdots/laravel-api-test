<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model {
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['hotel_id','review_title','author','rating','description'];

    public function getAuthorAttribute($value) {
        return ucfirst($value);
    }

}
