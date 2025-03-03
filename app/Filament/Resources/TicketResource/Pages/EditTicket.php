<?php

namespace App\Filament\Resources\TicketResource\Pages;

use App\Filament\Resources\TicketResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTicket extends EditRecord
{
    protected static string $resource = TicketResource::class;
    protected function getTitle(): string{
        return __('Edit ticket');
    }

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make()->label(__('View')),
            Actions\DeleteAction::make()->label(__('Delete')),
        ];
    }
}
