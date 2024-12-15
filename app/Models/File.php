<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $guarded = [];
    /**
     * Get the parent fileable model (database).
     */
    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }
}
