<?php

namespace App\Filament\Resources\TicketStatusResource\Pages;

use App\Filament\Resources\TicketStatusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListTicketStatuses extends ListRecords
{
    protected static string $resource = TicketStatusResource::class;
    protected function getTitle(): string{
        return __('Ticket status');
    }
    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label(__('New ticket status')),
        ];
    }

    protected function getTableQuery(): Builder
    {
        return parent::getTableQuery()
            ->whereNull('project_id');
    }
}
