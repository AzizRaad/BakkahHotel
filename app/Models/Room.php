<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['room_type_id','room_no','total_adults','room_capacity','price','size','view','bed_style','discount','description','status'];

    // protected $guarded =[];

    public function roomType() {
        return $this->belongsTo(RoomType::class);
    }

    public function facilities() {
        return $this->belongsToMany(Facility::class);
    }

    public function booking() {
        return $this->hasOne(Booking::class);
    }

    public function facility_rooms() {
        return $this->hasManyThrough(
            Facility::class,
            facility_room::class,
            'room_id',
            'id',
            'id',
            'facility_id'
        );
    }
}
