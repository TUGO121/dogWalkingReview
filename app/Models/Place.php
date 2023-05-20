<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    
    public function review()   
    {
        return $this->hasMany(Review::class);  
    }

public function getByLimit(int $limit_count = 20)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getByPlace(int $limit_count = 5)
    {
         return $this->reviews()->with('place')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
