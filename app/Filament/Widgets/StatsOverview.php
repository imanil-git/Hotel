<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $total_categopry = Category::count();
        $total_products = Product::count();
        return [
            Stat::make('Total Category', $total_categopry)
            ->description('32k increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),
            Stat::make('Total Products', $total_products),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
