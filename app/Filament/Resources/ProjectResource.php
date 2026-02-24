<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    protected static ?string $navigationLabel = 'Projeler';

    protected static ?string $modelLabel = 'Proje';

    protected static ?string $pluralModelLabel = 'Projeler';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Proje Bilgileri')
                    ->schema([
                        TextInput::make('title')
                            ->label('Proje Adı')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(string $operation, $state, Set $set) =>
                                $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(Project::class, 'slug', ignoreRecord: true),

                        TextInput::make('category')
                            ->label('Kategori')
                            ->placeholder('Örn: Konut, Sanayi, Altyapı')
                            ->maxLength(255),

                        Select::make('status')
                            ->label('Durum')
                            ->options([
                                'ongoing' => 'Devam Ediyor',
                                'completed' => 'Tamamlandı',
                            ])
                            ->default('completed')
                            ->required(),
                    ])->columns(2),

                Section::make('Açıklamalar')
                    ->schema([
                        Textarea::make('description')
                            ->label('Kısa Açıklama')
                            ->rows(3)
                            ->columnSpanFull(),

                        RichEditor::make('content')
                            ->label('Detaylı İçerik')
                            ->columnSpanFull(),
                    ]),

                Section::make('Görseller')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Ana Görsel')
                            ->image()
                            ->directory('projects/main')
                            ->imageEditor(),

                        FileUpload::make('gallery')
                            ->label('Proje Galerisi')
                            ->image()
                            ->multiple()
                            ->directory('projects/gallery')
                            ->reorderable(),
                    ])->columns(2),

                Section::make('Ek Detaylar')
                    ->schema([
                        TextInput::make('client')
                            ->label('Müşteri / Kurum')
                            ->maxLength(255),

                        TextInput::make('location')
                            ->label('Konum')
                            ->maxLength(255),

                        DatePicker::make('completion_date')
                            ->label('Tamamlanma Tarihi'),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Görsel')
                    ->circular(),
                TextColumn::make('title')
                    ->label('Proje Adı')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color('info')
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Durum')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'ongoing' => 'warning',
                        'completed' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        'ongoing' => 'Devam Ediyor',
                        'completed' => 'Tamamlandı',
                        default => $state,
                    }),
                TextColumn::make('completion_date')
                    ->label('Tarih')
                    ->date('M Y')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Durum')
                    ->options([
                        'ongoing' => 'Devam Ediyor',
                        'completed' => 'Tamamlandı',
                    ]),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
