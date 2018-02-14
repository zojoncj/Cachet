<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'component' => [
        'status_update' => [
            'mail' => [
                'subject'  => 'Статус компонента обновлён',
                'greeting' => 'Статус компонента обновлен!',
                'content'  => 'Статус :name изменен с :old_status на :new_status.',
                'action'   => 'Просмотреть',
            ],
            'slack' => [
                'title'   => 'Статус компонента обновлён',
                'content' => 'Статус :name изменен с :old_status на :new_status.',
            ],
            'sms' => [
                'content' => 'Статус :name изменен с :old_status на :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Сообщение о новом инциденте',
                'greeting' => 'На :app_name произошел новый инцидент.',
                'content'  => 'Инцидент :name был обновлён',
                'action'   => 'Просмотреть',
            ],
            'slack' => [
                'title'   => 'Инцидент :name был обновлён',
                'content' => 'На :app_name произошел новый инцидент',
            ],
            'sms' => [
                'content' => 'На :app_name произошел новый инцидент.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Инцидент обновлён',
                'content' => ':name обновлен',
                'title'   => ':name \'у был присвоен статус :new_status',
                'action'  => 'Просмотреть',
            ],
            'slack' => [
                'title'   => ':name обновлен',
                'content' => ':name \'у был присвоен статус :new_status',
            ],
            'sms' => [
                'content' => 'Инцидент :name был обновлён',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Создано новое расписание',
                'content' => ':name было запланировано :date',
                'title'   => 'Было создано новое плановое обслуживание.',
                'action'  => 'Просмотреть',
            ],
            'slack' => [
                'title'   => 'Новое расписание создано!',
                'content' => ':name было запланировано :date',
            ],
            'sms' => [
                'content' => ':name было запланировано :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Подтвердите свою подписку',
                'content' => 'Нажмите для подтверждения своей подписки на страницу статуса :app_name.',
                'title'   => 'Нажмите для подтверждения своей подписки на страницу статуса :app_name.',
                'action'  => 'Подтвердить',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Проверка от статус страницы Cachet!',
                'content' => 'Тестовое уведомление от Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Ваше приглашение находится внутри...',
                'content' => 'Вы были приглашены присоединиться к статус странице :app_name.',
                'title'   => 'Вы приглашены в статус страницу :app_name.',
                'action'  => 'Принять',
            ],
        ],
    ],
];
