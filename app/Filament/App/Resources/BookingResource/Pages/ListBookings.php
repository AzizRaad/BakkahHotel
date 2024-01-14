<?php

namespace App\Filament\App\Resources\BookingResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\ListRecords\Tab;
use App\Filament\App\Resources\BookingResource;

class ListBookings extends ListRecords
{
    protected static string $resource = BookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs() : array {
        return [
            'My Booking' => Tab::make()->modifyQueryUsing(fn(Builder $query) =>
                $query->where('user_id',auth()->user()->id)
            ),
        ];
    }
}
