<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function reviews()   
    {
        return $this->hasMany(Review::class);  
    }
    
    public function getByLimit(int $limit_count = 20)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getByCategory(int $limit_count = 5)
    {
         return $this->reviews()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}

