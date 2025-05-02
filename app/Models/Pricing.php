<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'fees_charged',
        'home_office_fee',
        'work_description',
        'total',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
