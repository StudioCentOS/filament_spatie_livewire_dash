<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //
        ];
    }

    public static function canView(): bool
    {
        return auth()->user()->hasRole('User');
    }
}
