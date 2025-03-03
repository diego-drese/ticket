<?php

namespace App\Filament\Resources\ProjectStatusResource\Pages;

use App\Filament\Resources\ProjectStatusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectStatuses extends ListRecords
{
    protected static string $resource = ProjectStatusResource::class;
    protected function getTitle(): string{
        return __('Project status');
    }
    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label(__('New project status')),
        ];
    }
}
