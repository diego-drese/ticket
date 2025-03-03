<?php

namespace App\Filament\Resources\ProjectStatusResource\Pages;

use App\Filament\Resources\ProjectStatusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProjectStatus extends ViewRecord
{
    protected static string $resource = ProjectStatusResource::class;
    protected function getTitle(): string{
        return __('View project status');
    }
    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
