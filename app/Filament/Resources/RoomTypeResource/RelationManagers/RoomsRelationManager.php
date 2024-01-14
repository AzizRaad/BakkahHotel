<?php

namespace App\Filament\Resources\RoomTypeResource\RelationManagers;

use Filament\Forms;
use App\Models\Room;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class RoomsRelationManager extends RelationManager
{

    public Room $room;

    protected static string $relationship = 'rooms';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->Schema([
                    Select::make('room_type_id')
                    ->relationship('roomtype','name')
                    ->required()
                    ->preload(),
                    // Placeholder::make('room_type_id')->content(fn(Room $room) =>
                    //  $room->roomType
                    // ),
                    TextInput::make('room_no')->required(),
                    TextInput::make('total_adults')->required(),
                    TextInput::make('room_capacity')->required(),
                    TextInput::make('price')->required(),
                    TextInput::make('size')->required()
                    ->hint('size in m2'),
                    TextInput::make('view')->required(),
                    TextInput::make('bed_style')->required(),
                    TextInput::make('discount')->required(),
                    Textarea::make('description')->required()
                    ->columnSpanFull(),
                    Select::make('status')
                    ->options([
                        "available" => "available",
                        "occupied" => "occupied",
                    ]),
                    Select::make('facilities')
                    ->relationship('facilities','fac_name')
                    ->multiple()
                    ->preload()
                ])->columns(2)
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('rooms')
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('roomtype.name'),
                TextColumn::make('total_adults'),
                TextColumn::make('room_capacity'),
                TextColumn::make('price'),
                TextColumn::make('size'),
                TextColumn::make('view'),
                TextColumn::make('bed_style'),
                TextColumn::make('discount'),
                TextColumn::make('description'),
                TextColumn::make('status'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
