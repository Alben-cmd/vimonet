<?php

namespace App\Filament\Triad\Resources;

use App\Filament\Triad\Resources\TriadResource\Pages;
use App\Filament\Triad\Resources\TriadResource\RelationManagers;
use App\Models\Triad;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TriadResource extends Resource
{
    protected static ?string $model = Triad::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTriads::route('/'),
            'create' => Pages\CreateTriad::route('/create'),
            'edit' => Pages\EditTriad::route('/{record}/edit'),
        ];
    }
}
