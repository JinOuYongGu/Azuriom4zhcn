<?php

return [
    'title' => '安装',

    'welcome' => 'Azuriom是 <strong>下一代</strong> 游戏CMS。 是免费的 <strong></strong> 和 <strong>开源</strong>, 是一个 <strong>现代版本, 可靠、快速和安全的</strong> 替代现有CMS，这样您就可以获得 <strong>最好的 web 体验</strong>。',

    'back' => '后退',

    'requirements' => [
        'php' => 'PHP :version 或更高版本',
        'writable' => '写入权限',
        'rewrite' => 'URL 重写已启用',
        'extension' => '扩展 :extension',
        'function' => '函数 :function 已启用',

        'refresh' => '刷新要求',
        'success' => 'Azuriom已准备好配置！',
        'missing' => '您的服务器没有安装Azuriom的必要条件。',

        'help' => [
            'writable' => '您可以尝试此命令授予写入权限： <code>:命令</code>。',
            'rewrite' => '您可以按照 <a href="https://azuriom.com/docs/installation" target="_blank" rel="noopener noreferrer">我们文档</a> 中的说明启用URL重写。',
            'htaccess' => '文件 <code>.htmaccess</code> 或 <code>public/.htmaccess</code> 丢失。请确保您已启用隐藏文件并且该文件存在。',
            'extension' => '您可以尝试此命令来安装缺少的 PHP 扩展： <code>:命令</code>。<br>完成后，重启 Apache 或 Nginx 。',
            'function' => '您需要通过编辑 <code>disable_functions</code> 的值，在PHP的 php.ini 文件中启用此功能。',
        ],
    ],

    'database' => [
        'title' => '数据库',

        'type' => '类型',
        'host' => '主机',
        'port' => '端口',
        'database' => '数据库',
        'user' => '用户',
        'password' => '密码',

        'warn' => '此数据库类型不推荐，只能在无法以其他方式使用时使用。',
    ],

    'game' => [
        'title' => '游戏',

        'locale' => '区域设置',

        'warn' => '请小心，一旦安装完成，就不可能在不重新安装Azuriom的情况下更改这个！',

        'install' => '安装',

        'user' => [
            'title' => '管理员帐户',

            'name' => '名称',
            'email' => '电子邮件地址',
            'password' => '密码',
            'password_confirm' => '确认密码',
        ],

        'minecraft' => [
            'premium' => '通过 Minecraft.net 启用用户名验证',
        ],

        'steam' => [
            'profile' => 'Steam个人资料URL',
            'profile_info' => '这个Steam用户将是站点管理员。',

            'key' => 'Steam API 密钥',
            'key_info' => '您可以在 <a href="https://steamcommunity.com/dev/apikey" target="_blank" rel="noopener noreferrer">Steam</a> 中找到您的 Steam API 密钥。',
        ],
    ],

    'success' => [
        'thanks' => '感谢您选择 Azuriom ！',
        'success' => '您的网站已成功安装，您现在可以使用您的网站并做一些非常棒的事情！',
        'go' => '开始使用',
        'support' => '如果您欣赏Azuriom和我们提供的工作，请不要忘记 <a href="https://azuriom.com/support-us" target="_blank" rel="noopener noreferrer">支持我们</a>。',
    ],
];
