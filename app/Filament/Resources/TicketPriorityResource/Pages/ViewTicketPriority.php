<?php

namespace App\Filament\Resources\TicketPriorityResource\Pages;

use App\Filament\Resources\TicketPriorityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTicketPriority extends ViewRecord
{
    protected static string $resource = TicketPriorityResource::class;
    protected function getTitle(): string{
        return __('View ticket priority');
    }

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
