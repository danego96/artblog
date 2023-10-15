<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\Likeable;
use App\Models\Concerns\Likes;


class Article extends Model implements Likeable
{
    use HasFactory;
    use Likes;

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false ) {
            $query->where('tag', 'like', '%' . request('tag') . '%');
        }
    }
}
