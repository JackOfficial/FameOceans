<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerInquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'organization_name',
        'contact_name',
        'email',
        'phone',
        'partnership_type',
        'country',
        'logo',
        'message',
        'status',
    ];

    /**
     * Helper accessor for logo path with fallback placeholder.
     */
    public function getLogoUrlAttribute(): string
    {
        if ($this->logo) {
            return asset('storage/' . $this->logo);
        }

        return asset('images/default-company-logo.png');
    }
}
