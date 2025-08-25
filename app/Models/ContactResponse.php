<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContactResponse extends Model
{
    protected $fillable = ['contact_id', 'content'];

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
