<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model
{
    use SoftDeletes;
    protected $table = 'resources';

    protected $fillable = [
        'title',
        'author',
        'subject',
        'format',
        'published_year',
    ];

        public function lists(): BelongsToMany
    {
        return $this->belongsToMany(
            ListModel::class,
            'list_resource',
            'resource_id',
            'list_id'
        )
        ->withPivot([
            'id',
            'tag_id',
            'position',
            'personal_note',
        ])
        ->withTimestamps();
    }



}



    