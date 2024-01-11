<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Room;
use Filament\Tables;
use App\Models\RoomType;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\facility_room;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\RoomResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RoomResource\RelationManagers;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class RoomResource extends Resource
{

    public Room $room;

    protected static ?string $model = Room::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->Schema([
                    Select::make('room_type_id')
                    ->relationship('roomtype','name')
                    ->required()
                    ->preload(),
                    TextInput::make('total_adults')->required(),
                    TextInput::make('room_capacity')->required(),
                    TextInput::make('price')->required(),
                    TextInput::make('size')->required(),
                    TextInput::make('view')->required(),
                    TextInput::make('bed_style')->required(),
                    TextInput::make('discount')->required(),
                    TextInput::make('description')->required(),
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

    public static function table(Table $table): Table
    {
        return $table
        // ->relationship(fn (): HasManyThrough => $this->room->facilityRooms())
        // ->inverseRelationship('rooms')
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
                TextColumn::make('facilities.fac_name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),

                ])
                ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }
}
