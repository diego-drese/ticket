<?php

namespace App\Filament\Resources\ActivityResource\Pages;

use App\Filament\Resources\ActivityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewActivity extends ViewRecord
{
    protected static string $resource = ActivityResource::class;
    protected function getTitle(): string{
        return __('View activity');
    }
    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
