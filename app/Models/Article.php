<?php

namespace App\Models;

use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use Searchable;

    public function toSearchableArray()
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'category'=>$this->category
       ];
    }

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'user_id'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    

   

    
}
