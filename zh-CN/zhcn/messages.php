<?php

return [

    'lang' => '简体中文',

    'copyright' => '由 <a href="https://azuriom.com" target="_blank" rel="noopener noreferrer">Azuriom</a> 驱动支持',

    'date' => 'F j, Y',
    'date-full' => 'F j, Y \a\t g:i A',
    'date-compact' => 'm/d/Y \a\t g:i A',

    'nav' => [
        'toggle' => '切换导航栏',
        'profile' => '个人信息',
        'admin' => '管理员面板',
    ],

    'actions' => [
        'add' => '添加',
        'show' => '显示',
        'create' => '创建',
        'close' => '关闭',
        'edit' => '编辑',
        'update' => '更新',
        'delete' => '删除',
        'save' => '保存',
        'continue' => '继续',
        'browse' => '浏览',
        'choose-file' => '选择文件',
        'download' => '下载',
        'upload' => '上传',
        'cancel' => '取消',
        'enable' => '启用',
        'disable' => '禁用',
        'copy' => '复制',
        'comment' => '评论',
        'search' => '搜索',
        'send' => '发送',
        'reload' => '重载',
        'refresh' => '刷新',
        'duplicate' => '重复',
        'remove' => '移除',
        'back' => '返回',
    ],

    'fields' => [
        'name' => '名称',
        'title' => '标题',
        'action' => '行动',
        'date' => '日期',
        'slug' => '标注',
        'link' => '链接',
        'enabled' => '已启用',
        'author' => '作者',
        'user' => '用户',
        'image' => '图片',
        'type' => '类型',
        'file' => '文件',
        'description' => '描述',
        'short-description' => '简短描述',
        'content' => '内容',
        'role' => '角色',
        'quantity' => '数量',
        'money' => '资金',
        'color' => '颜色',
        'url' => '网址',
        'status' => '状态',
        'category' => '类别',
        'version' => '版本',
        'game' => '游戏',
        'price' => '价格',
        'icon' => '图标',
        'server' => '服务器',
    ],

    'range' => [
        'days' => '按天数',
        'months' => '按月',
    ],

    'loading' => '加载中...',

    'yes' => '是',
    'no' => '否',
    'unknown' => '未知',
    'none' => '无',
    'copied' => '已复制',

    'home' => '首页',
    'welcome' => '欢迎来到 :name',

    'maintenance' => '维护',
    'maintenance-message' => '该网站目前正在维护中',

    'status-success' => '操作成功',
    'status-error' => '发生错误：:error',

    'theme' => [
        'light' => '亮色主题',
        'dark' => '暗色主题',
    ],

    'captcha' => '验证码验证失败，请重试',

    'notifications' => [
        'notifications' => '通知',
        'read' => '标记为已读',
        'empty' => '您没有未读通知',
    ],

    'clipboard' => [
        'copied' => '已复制',
        'error' => 'CTRL + C 以复制',
    ],

    'server' => [
        'online' => ':count 在线玩家|:count 在线玩家',
        'offline' => '服务器目前处于离线状态',
    ],

    'profile' => [
        'title' => '个人资料',
        'change-email' => '更改电子邮件地址',
        'change-password' => '更改密码',

        'not-verified' => '您的电子邮件未验证，请检查您的电子邮件以获取验证链接',

        'updated' => '您的个人资料已更新',

        'info' => [
            'role' => '角色：:role',
            'register' => '注册：:date',
            'money' => '资金：:money',
            '2fa' => '双重验证 (2FA)：:2fa',
        ],

        '2fa' => [
            'enable' => '启用两步验证',
            'disable' => '禁用两步验证',
            'info' => '在您的手机上扫描二维码，像 Authy、1Password 或 Google Authenticator 一样使用两步验证应用程序扫描二维码',
            'secret' => '密钥： :secret',
            'title' => '启用两步验证',
            'code' => '验证码',
            'enabled' => '双重身份验证已启用',
            'disabled' => '双重身份验证已禁用',
        ],

        'email-not-verified' => '您的电子邮箱尚未验证，请检查您的邮件以获取验证链接。如果没有收到，可以重新发送电子邮件',

        'money-transfer' => [
            'title' => '资金转移',
            'self' => '您不能向自己转账',
            'not-enough' => '资金不足',
            'success' => '转账成功',
            'notification' => '收到 :user 的转账 :money',
        ],
    ],

    'posts' => [
        'posts' => '帖子',
        'posted' => ':user 在 :date 发布',
        'not-published' => '此帖子尚未发布',
        'read' => '阅读更多',
    ],

    'comments' => [
        'create' => '留下评论',
        'guest' => '您必须登录才能评论',
        'author' => '<strong>:user</strong> 于 :date 评论',
        'your-comment' => '您的评论',
        'delete-title' => '删除',
        'delete-description' => '您确定要删除此评论吗？',
    ],

    'likes' => ':count 人喜欢',
];
