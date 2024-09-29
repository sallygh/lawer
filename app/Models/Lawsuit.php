<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawsuit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'subject',
        'plaintiff_id',
        'defendant_id',
        'status',
        'agreed_amount',
        'remaining_amount',
        'paid_amount',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'agreed_amount' => 'decimal:2',
        'remaining_amount' => 'decimal:2',
        'paid_amount' => 'decimal:2',
    ];

    /**
     * Get the plaintiff client associated with the lawsuit.
     */
    public function plaintiff()
    {
        return $this->belongsTo(Client::class, 'plaintiff_id');
    }

    /**
     * Get the defendant client associated with the lawsuit.
     */
    public function defendant()
    {
        return $this->belongsTo(Client::class, 'defendant_id');
    }


    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
