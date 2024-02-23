<?php

declare(strict_types=1);

namespace App\Providers;

use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use App\MoonShine\Resources\UserResource;
use App\MoonShine\Resources\DirCargoResource;
use App\MoonShine\Resources\DirPayerResource;
use App\MoonShine\Resources\UserRoleResource;
use App\MoonShine\Resources\RefillingResource;
use MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\DirServiceResource;
use App\MoonShine\Resources\DirTypeTruckResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\DirPetrolStationResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            MenuItem::make('refillings', new RefillingResource())
                ->translatable('moonshine::ui.refilling'),

            MenuGroup::make('directory', [
                MenuItem::make('dir_services', new DirServiceResource())->translatable('moonshine::ui.dir.service'),
                MenuItem::make('dir_petrols', new DirPetrolStationResource())->translatable('moonshine::ui.dir.petrol'),
                MenuItem::make('dir_cargos', new DirCargoResource())->translatable('moonshine::ui.dir.cargo'),
                MenuItem::make('dir_payers', new DirPayerResource())->translatable('moonshine::ui.dir.payer'),
                MenuItem::make('dir_type_trucks', new DirTypeTruckResource())->translatable('moonshine::ui.dir.truck'),
            ])->translatable('moonshine::ui.dir')
                ->icon('heroicons.cog'),
            //->canSee(fn () => Auth()->user()->moonshine_user_role_id === 1),

            MenuGroup::make('users', [
                MenuItem::make('users', new UserResource())->translatable('moonshine::ui.user.user'),
                MenuItem::make('roles', new UserRoleResource())->translatable('moonshine::ui.user.user'),
            ])->translatable('moonshine::ui.user'),

            MenuGroup::make(static fn () => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn () => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn () => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ]),

        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
