<?php

namespace App\Filament\Resources\TicketStatusResource\Pages;

use App\Filament\Resources\TicketStatusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTicketStatus extends ViewRecord
{
    protected static string $resource = TicketStatusResource::class;
    protected function getTitle(): string{
        return __('View ticket status');
    }
    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
