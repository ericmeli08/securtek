<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'province',
        'country',
        'postal_code',
        'phone',
        'email',
        'website',
        'latitude',
        'longitude',
        'is_active'
    ];

    protected $appends = ['full_address', 'google_maps_url'];

    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'is_active' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCountry($query, $country)
    {
        if ($country) {
            return $query->where('country', $country);
        }
        return $query;
    }

    public function scopeByProvince($query, $province)
    {
        if ($province) {
            return $query->where('province', $province);
        }
        return $query;
    }

    public function scopeByCity($query, $city)
    {
        if ($city) {
            return $query->where('city', $city);
        }
        return $query;
    }

    public function getFullAddressAttribute()
    {
        return "{$this->address}, {$this->city}, {$this->province} {$this->postal_code}, {$this->country}";
    }

    public function getGoogleMapsUrlAttribute()
    {
        return "https://www.google.com/maps/dir/?api=1&destination=" . urlencode($this->full_address);
    }
}
