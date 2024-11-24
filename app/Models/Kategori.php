<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable = [
        'name',
        'slug',
        'color',
    ];

    public function posts(): HasMany {
        return $this->hasMany(Post::class); // nama foreign key default nya adalah namaTabel_id
    }
}
