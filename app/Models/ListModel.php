<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListModel extends Model
{
    protected $table = 'lists';

    protected $fillable = [
        'name',
        'description',
        'user_id',
    ];


    /**
     * A list belongs to one user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resources()
    {
        return $this->belongsToMany(
            Resource::class,   // related model
            'list_resource',   // pivot table
            'list_id',         // FK on pivot table pointing to lists.id
            'resource_id'      // FK on pivot table pointing to resources.id
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
