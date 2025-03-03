<?php

namespace App\Filament\Resources\TicketPriorityResource\Pages;

use App\Filament\Resources\TicketPriorityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTicketPriorities extends ListRecords
{
    protected static string $resource = TicketPriorityResource::class;
    protected function getTitle(): string{
        return __('Ticket priorities');
    }
    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label(__('New ticket priority')),
        ];
    }
}
