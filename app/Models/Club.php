<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Club extends Model
{
    use HasFactory;

    public const TYPE_OPTIONS = [
        'N/A',
        'Putter',
        'LW', 'SW', 'GW', 'PW',
        '10i', '9i', '8i', '7i', '6i', '5i', '4i', '3i', '2i', '1i',
        '9h', '8h', '7h', '6h', '5h', '4h', '3h', '2h', '1h',
        '9w', '8w', '7w', '6w', '5w', '4w', '3w', '2w', '1w',
    ];

    protected $guarded = [
        'id',
    ];

    public function bag(): BelongsTo
    {
        return $this->belongsTo(Bag::class);
    }
}
