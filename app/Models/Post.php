<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;


    //Yang diperbolehkan

    // protected $fillable = ['title', 'excerpt', 'body'];

    //Yang dijaga

    protected $guarded = ['id'];

    //eager load agar tidak berat query

    protected $with = ['author', 'category'];

    //Eloquent Relationship

    // global scope

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return  $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // ?? cek isset langsung dan ternary

        // konfigurasi search

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return  $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });


        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // arrow function
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )

        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Menhubungkan dengan user
    // alias author
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Customizing The Key
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // package sluggable

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
