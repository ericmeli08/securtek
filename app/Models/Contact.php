<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;


class Contact extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = ['name', 'email', 'message', 'read_at'];

    public function responses(): HasMany
    {
        return $this->hasMany(ContactResponse::class);
    }

    public function routeNotificationForMail()
    {
        return $this->email;
    }
}
