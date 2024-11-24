<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    protected $with = ['author', 'kategori']; // fungsinya agar selalu menjalankan eager loading (default). Isinya adalah relasi di model tersebut


    public function author(): BelongsTo {
        return $this->belongsTo(User::class); // belongsTo sama artinya dengan hasOne
    }

    public function kategori(): BelongsTo {
        return $this->belongsTo(Kategori::class);
    }
    
    public function scopeFilter(Builder $query, array $filters): void { // penamaan method scope harus diawali scope baru nama method nya (camelCase)
        // when() fungsinya untuk menjalankan callback function ketika bernilai true
        $query->when($filters['search'] ?? false,   // ($filters['search'] ?? false) sama aja kayak -> isset($filters['search']) ? $filters['search'] : false
        fn($query, $search) =>       // penulisan arrow function : fn(variabel parameter nya) => isi
             $query->where('title', 'like', '%' . $search . '%') // ini adalah scope nya (biasanya where() yang dijadikan sebagai scope)
        ); 

        $query->when($filters['kategori'] ?? false,
    fn($query, $kategori) =>
            $query->whereHas('kategori', fn($query) => $query->where('slug', $kategori)) // whereHas() fungsinya untuk melakukan query terhadap relasi yang kita punya. Isinya adalah ('nama method relasi nya', callback function yang isinya scope)
        ); 

        $query->when($filters['author'] ?? false,
    fn($query, $author) =>
            $query->whereHas('author', fn($query) => $query->where('username', $author))
        );
    }
}
