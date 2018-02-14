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

    // Setup form fields
    'setup' => [
        'email'            => 'Email',
        'username'         => 'Tên người dùng',
        'password'         => 'Mật khẩu',
        'site_name'        => 'Tến site',
        'site_domain'      => 'Domain',
        'site_timezone'    => 'Chọn timezone',
        'site_locale'      => 'Chọn ngôn ngữ',
        'enable_google2fa' => 'Bật tính năng xác thực 2 bước của google',
        'cache_driver'     => 'Cache Driver',
        'queue_driver'     => 'Trình điều khiển hàng đợi',
        'session_driver'   => 'Session Driver',
        'mail_driver'      => 'Mail Driver',
        'mail_host'        => 'Máy chủ thư',
        'mail_address'     => 'Địa chỉ thư gửi đi',
        'mail_username'    => 'Mail Username',
        'mail_password'    => 'Mật khẩu thư',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Tên đăng nhập hoặc Email',
        'email'         => 'Email',
        'password'      => 'Mật khẩu',
        '2fauth'        => 'Mã số xác thực',
        'invalid'       => 'Tên người dùng hoặc mật khẩu không hợp lệ',
        'invalid-token' => 'Token không hợp lệ',
        'cookies'       => 'Bạn phải bật cookie để đăng nhập.',
        'rate-limit'    => 'Vượt quá giới hạn truy cập.',
        'remember_me'   => 'Ghi nhớ đăng nhập',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Tên',
        'status'             => 'Trạng thái',
        'component'          => 'Component',
        'component_status'   => 'Component Status',
        'message'            => 'Tin nhắn',
        'message-help'       => 'Bạn cũng có thể sử dụng Markdown.',
        'occurred_at'        => 'Sự cố này đã xảy ra khi nào?',
        'notify_subscribers' => 'Notify subscribers?',
        'notify_disabled'    => 'Due to scheduled maintenance, notifications about this incident or its components will be suppressed.',
        'visibility'         => 'Incident Visibility',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Không Stickied',
        'public'             => 'Viewable by public',
        'logged_in_only'     => 'Only visible to logged in users',
        'templates'          => [
            'name'     => 'Tên',
            'template' => 'Template',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    'schedules' => [
        'name'         => 'Tên',
        'status'       => 'Trạng thái',
        'message'      => 'Tin nhắn',
        'message-help' => 'Bạn cũng có thể sử dụng Markdown.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => 'Tên',
            'template' => 'Template',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Tên',
        'status'      => 'Trạng thái',
        'group'       => 'nhóm',
        'description' => 'Miêu tả',
        'link'        => 'Liên kết',
        'tags'        => 'Thẻ Tag',
        'tags-help'   => 'Ngăn cách bởi dấu phẩy.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'                     => 'Tên',
            'collapsing'               => 'Expand/Collapse options',
            'visible'                  => 'Always expanded',
            'collapsed'                => 'Collapse the group by default',
            'collapsed_incident'       => 'Collapse the group, but expand if there are issues',
            'visibility'               => 'Visibility',
            'visibility_public'        => 'Visible to public',
            'visibility_authenticated' => 'Visible only to logged in users',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Tên',
        'description'        => 'Miêu tả',
        'start_at'           => 'Schedule start time',
        'timezone'           => 'Timezone',
        'schedule_frequency' => 'Schedule frequency (in seconds)',
        'completion_latency' => 'Completion latency (in seconds)',
        'group'              => 'nhóm',
        'active'             => 'Active?',
        'groups'             => [
            'name' => 'Group Name',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Tên',
        'suffix'                   => 'Hậu tố',
        'description'              => 'Miêu tả',
        'description-help'         => 'Bạn cũng có thể sử dụng Markdown.',
        'display-chart'            => 'Hiển thị các biểu đồ trên trang trạng thái?',
        'default-value'            => 'Giá trị mặc định',
        'calc_type'                => 'Calculation of metrics',
        'type_sum'                 => 'Tổng hợp',
        'type_avg'                 => 'Trung bình',
        'places'                   => 'Chữ số thập phân',
        'default_view'             => 'Default view',
        'threshold'                => 'How many minutes of threshold between metric points?',
        'visibility'               => 'Visibility',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'Giá trị',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Tến site',
            'site-url'                              => 'URL trang web',
            'display-graphs'                        => 'Hiển thị các biểu đồ trên trang trạng thái?',
            'about-this-page'                       => 'Về trang này',
            'days-of-incidents'                     => 'Sự cố này sẽ hiển thị mấy ngày ?',
            'time_before_refresh'                   => 'Status page refresh rate (in seconds).',
            'banner'                                => 'Banner Image',
            'banner-help'                           => 'Bạn nên upload ảnh có chiều rộng lớn hơn 930px',
            'subscribers'                           => 'Allow people to signup to email notifications?',
            'suppress_notifications_in_maintenance' => 'Suppress notifications when incident occurs during maintenance period?',
            'skip_subscriber_verification'          => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'                => 'Automatically localise your status page to your visitor\'s language?',
            'enable_external_dependencies'          => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                         => 'Show the timezone the status page is running in.',
            'only_disrupted_days'                   => 'Only show days containing incidents in the timeline?',
        ],
        'analytics' => [
            'analytics_google'       => 'Mã Google Analytics',
            'analytics_gosquared'    => 'GoSquared Analytics code',
            'analytics_piwik_url'    => 'URL of your Piwik instance (without http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'localization' => [
            'site-timezone'        => 'Múi giờ',
            'site-locale'          => 'Ngôn ngữ',
            'date-format'          => 'Định dạng ngày',
            'incident-date-format' => 'Incident timestamp format',
        ],
        'security' => [
            'allowed-domains'      => 'Allowed domains',
            'allowed-domains-help' => 'Ngăn cách bằng dấu phẩy. Những domain dưới đây được cho phép một cách tự động.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background color',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Banner background color',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Text color',
            'dashboard-login'         => 'Show dashboard button in the footer?',
            'reds'                    => 'Red (used for errors)',
            'blues'                   => 'Blue (used for information)',
            'greens'                  => 'Green (used for success)',
            'yellows'                 => 'Yellow (used for alerts)',
            'oranges'                 => 'Orange (used for notices)',
            'metrics'                 => 'Metrics fill',
            'links'                   => 'Liên kết',
        ],
    ],

    'user' => [
        'username'       => 'Tên người dùng',
        'email'          => 'Email',
        'password'       => 'Mật khẩu',
        'api-token'      => 'API Token',
        'api-token-help' => 'Khi tạo API token mới, các API token cũ sẽ không sử dụng được nữa.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'User Level',
        'levels'         => [
            'admin' => 'Quản trị',
            'user'  => 'Người dùng',
        ],
        '2fa' => [
            'help' => 'Khi enable chức năng xác minh hai lớp (  two factor authentication ) sẽ tăng độ bảo mật cho account của bạn. Bạn cần phải tải  <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a>  hoặc các ứng dụng tương tự cho điện thoại của bạn. Mỗi khi login, bạn sẽ phải sử dụng phần mềm này để tạo mã, và nhập vào khung đăng nhập.',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'Email #:id',
        ],
    ],

    'general' => [
        'timezone' => 'Select Timezone',
    ],

    // Buttons
    'add'            => 'Thêm',
    'save'           => 'Lưu thay đổi',
    'update'         => 'Cập nhật',
    'create'         => 'Tạo mới',
    'edit'           => 'Chỉnh sửa',
    'delete'         => 'Xoá',
    'submit'         => 'Gửi',
    'cancel'         => 'Hủy',
    'remove'         => 'Xoá',
    'invite'         => 'Mời',
    'signup'         => 'Đăng ký',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* Tùy chọn',
];
