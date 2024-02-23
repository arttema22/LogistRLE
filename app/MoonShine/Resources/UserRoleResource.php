<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Role;
use App\Models\UserRole;

use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Attributes\Icon;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Textarea;

/**
 * @extends ModelResource<Role>
 */
#[Icon('heroicons.outline.bookmark')]
class UserRoleResource extends ModelResource
{
    protected string $model = Role::class;

    public string $column = 'title';

    protected bool $isAsync = true;

    protected bool $editInModal = true;

    public function title(): string
    {
        return __('moonshine::ui.resource.role');
    }

    public function getActiveActions(): array
    {
        return ['update'];
    }

    public function fields(): array
    {
        return [
            Block::make([
                Text::make('title')
                    ->required()
                    ->sortable()
                    ->translatable('')
                    ->showOnExport(),
                Textarea::make('comment')
                    ->translatable('')
                    ->showOnExport(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'title' => 'required|min:3',
            'comment' => 'min:3|max:1000',
        ];
    }

    public function search(): array
    {
        return [
            'id',
            'title',
        ];
    }
}
