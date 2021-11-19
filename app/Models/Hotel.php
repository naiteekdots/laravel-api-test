<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','supplier','status','address'];


    public function reviews() {
        return $this->hasMany(Review::class, 'hotel_id', 'id');
    }

    public function scopeActiveHotel($query) {
        return $query->where('status', 'Active');
    }

    public function getNameAttribute($value) {
        return ucfirst($value);
    }

}
