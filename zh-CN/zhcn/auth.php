<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => '这些凭据不符合我们的记录',
    'throttle' => '登录尝试次数太多。请在 :seconds 秒后重试',

    'register' => '注册',
    'login' => '登录',
    'logout' => '注销',
    'verify' => '验证您的电子邮件地址',
    'passwords' => [
        'confirm' => '确认密码',
        'reset' => '重置密码',
        'send' => '发送密码重置链接',
    ],

    'name' => '用户名',
    'email' => '电子邮件地址',
    'password' => '密码',
    'confirm-password' => '确认密码',
    'current-password' => '当前密码',

    'conditions' => '我接受 <a href=":url" target="_blank">条款</a>',

    '2fa-code' => '两步验证码',
    '2fa-invalid' => '无效的代码',

    'suspended' => '此账户已暂停',

    'maintenance' => '该网站正在维护中',

    'remember-me' => '记住我',
    'forgot-password' => '忘记密码',

    'verify-sent' => '新的验证链接已发送到您的电子邮件地址',
    'verify-check' => '在继续之前，请检查您的电子邮件以获取验证链接',
    'verify-request' => '如果您没有收到电子邮件，您可以请求其他邮件',
    'verify-resend' => '重新发送邮件',

    'need-confirm' => '请在继续之前确认您的密码',

    'mail' => [
        'reset' => [
            'subject' => '重置密码通知',
            'line-1' => '您收到此邮件是因为我们收到了您帐户的密码重置请求',
            'action' => '重置密码',
            'line-2' => '此密码重置链接将在 :count 分钟后过期',
            'line-3' => '如果您没有请求重置密码，不需要进一步操作',
        ],

        'verify' => [
            'subject' => '验证电子邮件地址',
            'line-1' => '请点击下面的按钮来验证您的电子邮件地址',
            'action' => '验证电子邮件地址',
            'line-2' => '如果您没有创建帐户，无需采取进一步行动',
        ],
    ],
];
