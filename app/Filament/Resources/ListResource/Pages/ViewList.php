<?php

namespace App\Filament\Resources\ListResource\Pages;

use App\Filament\Resources\ListResource;
use App\Models\ListModel;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ViewRecord;

class ViewList extends ViewRecord
{
    protected static string $resource = ListResource::class;

    protected static string $view = 'filament.pages.list.view';

    public function getHeading(): string
    {
        return $this->record->name;
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Adicionar')
                ->form([
                    TextInput::make('item')
                ])
                ->action(function (array $data, ListModel $record): void {
                    $this->record->items()->create($data);
                }),
        ];
    }
}
