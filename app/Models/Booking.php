<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function room() {
        return $this->BelongsTo(Room::class);
    }
    public function user() {
        return $this->BelongsTo(User::class);
    }
}
