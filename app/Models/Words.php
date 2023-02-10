<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Words extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['word', 'slug', 'meaning','example2', 'example1', 'user_id', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'word'
            ]
        ];
    }
}
