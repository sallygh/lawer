<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lawsuit_id',
        'amount',
        'invoice_date',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'amount' => 'decimal:2',
        'invoice_date' => 'date',
    ];

    /**
     * Get the lawsuit associated with the invoice.
     */
    public function lawsuit()
    {
        return $this->belongsTo(Lawsuit::class, 'lawsuit_id');
    }
}
