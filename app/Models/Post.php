<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    
    // protected $table = 'blog_posts'; // digunakan ketika nama table yang digunakan berbeda dengan nama class model nya (model : Post , table : posts) nama table adalah nama model ditambah 's'
    // protected $primaryKey = 'post_id'; // digunakan ketika primary key bukan 'id'. (default primary key adalah 'id')

    protected $fillable = [
        'title', 
        'slug', 
        'author_id',
        'kategori_id',
        'body'
    ];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class); // belongsTo sama artinya dengan hasOne
    }

    public function kategori(): BelongsTo {
        return $this->belongsTo(Kategori::class);
    }
}
