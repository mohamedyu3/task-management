<?php

namespace App\Filament\Widgets;

use App\Models\Task;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;
class TaskOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Tasks', Task::count())
                ->icon('heroicon-o-clipboard-document')
                ->color('gray'),

            Card::make('Completed Tasks', Task::where('status', 'done')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),

            Card::make('In Progress', Task::where('status', 'in_progress')->count())
                ->icon('heroicon-o-clock')
                ->color('warning'),

            Card::make('To Do', Task::where('status', 'todo')->count())
                ->icon('heroicon-o-pencil-square')
                ->color('info'),
        ];
    }

}
