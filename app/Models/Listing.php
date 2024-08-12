<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['tag']) && $filters['tag']) {
            $query->where('tags', 'like', '%' . $filters['tag'] . '%');
        }

        if (isset($filters['search']) && $filters['search']) {
            $query->where('title', 'like', '%' . $filters['search'] . '%')
            ->orWhere('tags','like','%' . request('search').'%');

        }
    }

    //Relationship to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    }
