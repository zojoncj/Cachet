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
                'subject'  => 'สถานะของส่วนประกอบมีการเปลี่ยนแปลง',
                'greeting' => 'สถานะของส่วนประกอบเปลี่ยนแปลง!',
                'content'  => ':name เปลี่ยนสถานะจาก :old_status เป็น :new_status.',
                'action'   => 'ดู',
            ],
            'slack' => [
                'title'   => 'สถานะของส่วนประกอบมีการเปลี่ยนแปลง',
                'content' => ':name เปลี่ยนสถานะจาก :old_status เป็น :new_status.',
            ],
            'sms' => [
                'content' => ':name เปลี่ยนสถานะจาก :old_status เป็น :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'มีเหตุการณ์ใหม่ถูกรายงานเข้ามา',
                'greeting' => 'มีเหตุการณ์ที่เกิดขึ้นกับ :app_name',
                'content'  => 'เหตุการณ์ :name',
                'action'   => 'ดู',
            ],
            'slack' => [
                'title'   => 'เหตุการณ์ :name เกิดขึ้น',
                'content' => 'เหตุการณ์ใหม่เกิดขึ้นกับ :app_name',
            ],
            'sms' => [
                'content' => 'มีเหตุการณ์ที่เกิดขึ้นกับ :app_name',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'เหตุการณ์มีการเปลี่ยนแปลง',
                'content' => ':name ถูกเปลี่ยนแปลง',
                'title'   => ':name เปลี่ยนสถานะเป็น :new_status',
                'action'  => 'ดู',
            ],
            'slack' => [
                'title'   => ':name ถูกเปลี่ยนแปลง',
                'content' => ':name เปลี่ยนสถานะเป็น :new_status',
            ],
            'sms' => [
                'content' => 'เหตุการณ์ :name ถูกเปลี่ยนแปลง',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'มีกำหนดการใหม่',
                'content' => ':name ถูกกำหนดไว้วันที่ :date',
                'title'   => 'มีการระบุกำหนดการซ่อมบำรุง',
                'action'  => 'ดู',
            ],
            'slack' => [
                'title'   => 'มีกำหนดการใหม่!',
                'content' => ':name ถูกกำหนดไว้วันที่ :date',
            ],
            'sms' => [
                'content' => ':name ถูกกำหนดไว้วันที่ :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'ยืนยันการติดตามของคุณ',
                'content' => 'คลิกเพื่อยืนยันว่าคุณต้องการติดตามสถานะของ :app_name',
                'title'   => 'ยืนยันการติดตามสถานะของ :app_name',
                'action'  => 'ยืนยัน',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'ทดสอบจาก Cachet!',
                'content' => 'นี้คือทดสอบการแจ้งเตือนจาก Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'มีคำเชิญส่งถึงคุณ...',
                'content' => 'คุณถูกเชิญให้เข้าร่วมหน้าสถานะของ :app_name',
                'title'   => 'คุณได้รับคำเชิญให้เข้าร่วมหน้าสถานะของ :app_name',
                'action'  => 'ตกลง',
            ],
        ],
    ],
];
