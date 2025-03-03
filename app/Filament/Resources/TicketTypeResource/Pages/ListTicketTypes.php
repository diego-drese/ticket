<?php

namespace App\Filament\Resources\TicketTypeResource\Pages;

use App\Filament\Resources\TicketTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTicketTypes extends ListRecords
{
    protected static string $resource = TicketTypeResource::class;
    protected function getTitle(): string{
        return __('Ticket types');
    }
    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label(__('New ticket type')),
        ];
    }
}
