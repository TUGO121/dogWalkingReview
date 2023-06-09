<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Review extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'text',
        'stars',
        'user_id',
        'category_id',
        'place_id'
    ];
    
    public function getByLimit(int $limit_count = 20)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function category()   
    {
        return $this->belongsTo(Category::class);  
    }
    
    public function place()   
    {
    return $this->belongsTo(Place::class);  
    }
    
     public function user()   
    {
    return $this->belongsTo(User::class);  
    }
}
