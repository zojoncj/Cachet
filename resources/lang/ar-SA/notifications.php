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
                'subject'  => 'تم تحديث حالة المكون',
                'greeting' => 'تم تحديث حالة المكون!',
                'content'  => 'تم تغيير حالة :name من :old_status إلى :new_status.',
                'action'   => 'عرض',
            ],
            'slack' => [
                'title'   => 'تم تحديث حالة المكون',
                'content' => 'تم تغيير حالة :name من :old_status إلى :new_status.',
            ],
            'sms' => [
                'content' => 'تم تغيير حالة :name من :old_status إلى :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'تم الإبلاغ عن حالة جديدة',
                'greeting' => 'تم الإبلاغ عن حالة جديدة في صفحة الحالة الخاصة بـ :app_name.',
                'content'  => 'تم الإبلاغ عن حالة :name',
                'action'   => 'عرض',
            ],
            'slack' => [
                'title'   => 'تم الإبلاغ عن حالة :name',
                'content' => 'أبلغ عن حالة جديدة في صفحة الحالة الخاصة بـ :app_name',
            ],
            'sms' => [
                'content' => 'تم الإبلاغ عن حالة جديدة في صفحة الحالة الخاصة بـ :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'تم تحديث الحالة',
                'content' => 'تم تحديث :name',
                'title'   => 'تم تحديث :name إلى :new_status',
                'action'  => 'عرض',
            ],
            'slack' => [
                'title'   => 'تم تحديث :name',
                'content' => 'تم تحديث :name إلى :new_status',
            ],
            'sms' => [
                'content' => 'تم الإبلاغ عن حالة :name',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'تم جدولة عملية جديدة',
                'content' => 'تم جدولة :name إلى :date',
                'title'   => 'تم إنشاء صيانة مجدولة.',
                'action'  => 'عرض',
            ],
            'slack' => [
                'title'   => 'تم إنشاء جدول جديد!',
                'content' => 'تم جدولة :name إلى :date',
            ],
            'sms' => [
                'content' => 'تم جدولة :name إلى :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'تحقق من إشتراكك',
                'content' => 'تحقق من إشتراكك في صفحة الحالة الخاصة بـ :app_name.',
                'title'   => 'تحقق من إشتراكك في صفحة الحالة الخاصة بـ :app_name.',
                'action'  => 'تأكيد',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'تنبيه من Cachet!',
                'content' => 'رسالة تنبيه تجريبية من Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'دعوتك للإنضمام في الداخل...',
                'content' => 'أنت مدعو للإنضمام إلى صفحة الحالة الخاصة بـ :app_name.',
                'title'   => 'أنت مدعو للإنضمام إلى صفحة الحالة الخاصة بـ :app_name.',
                'action'  => 'قبول',
            ],
        ],
    ],
];
