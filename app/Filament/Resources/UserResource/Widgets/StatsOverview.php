<?php

namespace App\Filament\Resources\UserResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', \App\Models\User::count())
                ->description('Total registered users')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),
            Stat::make('New Users Today', \App\Models\User::whereDate('created_at', today())->count())
                ->description('Users registered today')
                ->descriptionIcon('heroicon-m-user-plus')
                ->color('primary'),
            Stat::make('Verified Users', \App\Models\User::whereNotNull('email_verified_at')->count())
                ->description('Users with verified email')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('warning'),
        ];
    }
}
