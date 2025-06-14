<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category() {
        return $this -> belongsTo(Category::class);
    }

    public function status() {
        return $this -> belongsTo(Status::class);
    }
    
//     class Product extends Model
// {
//     public function getStatusLabelAttribute()
//     {
//         return $this->status === 'available' ? 'Tersedia' : 'Tidak Tersedia';
//     }
// }

}
