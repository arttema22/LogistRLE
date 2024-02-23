<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\User;
use MoonShine\Fields\ID;
use Illuminate\Validation\Rule;
use MoonShine\Fields\Date;
use MoonShine\Fields\Text;
use MoonShine\Fields\Email;
use MoonShine\Fields\Image;
use MoonShine\Attributes\Icon;
use MoonShine\Decorations\Tab;
use MoonShine\Fields\Password;
use MoonShine\Decorations\Tabs;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Heading;
use MoonShine\Fields\PasswordRepeat;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Models\MoonshineUserRole;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Resources\MoonShineUserRoleResource;

/**
 * @extends ModelResource<User>
 */
#[Icon('heroicons.outline.users')]
class UserResource extends ModelResource
{
    protected string $model = User::class;

    public string $column = 'name';

    protected string $title = 'Users';

    public function fields(): array
    {
        return [
            Block::make([
                Tabs::make([
                    Tab::make(__('moonshine::ui.resource.main_information'), [
                        ID::make()
                            ->sortable()
                            ->showOnExport(),

                        BelongsTo::make(
                            __('moonshine::ui.resource.role'),
                            'moonshineUserRole',
                            static fn (MoonshineUserRole $model) => $model->name,
                            new MoonShineUserRoleResource(),
                        )->badge('purple'),

                        Text::make(__('moonshine::ui.resource.name'), 'name')
                            ->required()
                            ->showOnExport(),

                        Image::make(__('moonshine::ui.resource.avatar'), 'avatar')
                            ->showOnExport()
                            ->disk(config('moonshine.disk', 'public'))
                            ->dir('moonshine_users')
                            ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif']),

                        Date::make(__('moonshine::ui.resource.created_at'), 'created_at')
                            ->format("d.m.Y")
                            ->default(now()->toDateTimeString())
                            ->sortable()
                            ->hideOnForm()
                            ->showOnExport(),

                        Email::make(__('moonshine::ui.resource.email'), 'email')
                            ->sortable()
                            ->showOnExport()
                            ->required(),
                    ]),

                    Tab::make(__('moonshine::ui.resource.password'), [
                        Heading::make('Change password'),

                        Password::make(__('moonshine::ui.resource.password'), 'password')
                            ->customAttributes(['autocomplete' => 'new-password'])
                            ->hideOnIndex()
                            ->eye(),

                        PasswordRepeat::make(__('moonshine::ui.resource.repeat_password'), 'password_repeat')
                            ->customAttributes(['autocomplete' => 'confirm-password'])
                            ->hideOnIndex()
                            ->eye(),
                    ]),
                ]),
            ]),
        ];
    }

    /**
     * @return array{name: string, moonshine_user_role_id: string, email: mixed[], password: string}
     */
    public function rules($item): array
    {
        return [
            'name' => 'required',
            'moonshine_user_role_id' => 'required',
            'email' => [
                'sometimes',
                'bail',
                'required',
                'email',
                Rule::unique('moonshine_users')->ignoreModel($item),
            ],
            'password' => $item->exists
                ? 'sometimes|nullable|min:6|required_with:password_repeat|same:password_repeat'
                : 'required|min:6|required_with:password_repeat|same:password_repeat',
        ];
    }

    public function search(): array
    {
        return [
            'id',
            'name',
        ];
    }
}
