<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used on the admin dashboard
    |
    */

    'nav' => [
        'dashboard' => '仪表盘',
        'settings' => [
            'heading' => '设置',
            'settings' => [
                'settings' => '设置',
                'global' => '全局',
                'security' => '安全',
                'performances' => '性能',
                'seo' => 'SEO',
                'auth' => '认证',
                'mail' => '邮件',
                'maintenance' => '维护',
            ],
            'navbar' => '导航栏',
            'servers' => '服务器',
        ],

        'users' => [
            'heading' => '用户',
            'users' => '用户',
            'roles' => '角色',
            'bans' => '封禁',
        ],

        'content' => [
            'heading' => '内容',
            'pages' => '页面',
            'posts' => '帖子',
            'images' => '图像',
        ],

        'extensions' => [
            'heading' => '扩展',
            'plugins' => '插件',
            'themes' => '主题',
        ],

        'other' => [
            'heading' => '其他',
            'update' => '更新',
            'logs' => '日志',
        ],

        'profile' => [
            'profile' => '个人信息',
        ],

        'back-website' => '返回网站',

        'support' => '支持',
        'documentation' => '文档',
    ],

    'confirm-delete' => [
        'title' => '删除',
        'description' => '您确定要删除这个吗？您将无法撤回！',
    ],

    'footer' => '由 :azuriom &copy 强力驱动；由 :startbootstrap 设计',

    /*
    |
    | Admin pages
    |
    */

    'dashboard' => [
        'title' => '仪表板',

        'new-update' => '新版本的 Azuriom 可用 :version',
        'https-warning' => '您的网站没有使用 https，您应该开启并强制使用https来保护您和其他用户',
        'proxy-warning' => '如果你正在使用 Cloudflare，你应该安装Cloudflare支持插件',
        'recent-users' => '最近用户',
        'active-users' => '活跃用户',
        'emails-disabled' => '电子邮件被禁用，如果有用户忘记密码将无法重置。您可以在 <a href=":url">邮件设置</a> 中启用电子邮件。',
        'users' => '用户',
        'posts' => '帖子',
        'pages' => '页面',
        'images' => '图像',
    ],

    'settings' => [
        'index' => [
            'title' => '全局设置',

            'site-name' => '站点名称',
            'site-url' => '站点网址',
            'site-description' => '站点描述',
            'meta' => 'Meta 关键字',
            'meta-info' => '关键字必须用逗号分隔',
            'favicon' => '收藏夹图标',
            'background' => '背景',
            'logo' => 'Logo',
            'timezone' => '时区',
            'locale' => '本地化',
            'money' => '站点货币名称',
            'copyright' => '版权所有',
            'user-money-transfer' => '启用用户之间的资金转移',
            'site-key' => 'Azuriom.com的网站密钥',
            'site-key-label' => '需要 azuriom.com 网站密钥来安装市场购买的付费扩展。您可以在您的 <a href="https://azuriom.com/profile" target="_blank" rel="noopener norefferer">Azuriom 个人资料</a> 中获取您的站点密钥。',
        ],

        'security' => [
            'title' => '安全设置',

            'captcha' => [
                'title' => '验证码',
                'site-key' => '站点密钥',
                'secret-key' => '密钥',
                'recaptcha' => '您可以在 <a href="https://www.google.com/recaptcha/" target="_blank" rel="noopener noreferrer"> Google reCaptcha 网站</a>获取验证码密钥。您需要使用 reCaptcha <strong>v2 隐藏</strong> 密钥。',
                'hcaptcha' => '您可以在 <a href="https://www.hcaptcha.com/" target="_blank" rel="noopener noreferrer"> hCaptcha 网站</a> 上获取 hCaptcha 密钥。',
            ],

            'hash' => '哈希算法',
            'hash-info' => 'Argon2id 是最安全的算法，但它需要 PHP 7.3 或更高。如果你在运行 PHP 7.2 ，你应该使用 Argon2i',
            'hash-error' => '您当前的 PHP 版本不支持此散列算法',
        ],

        'performances' => [
            'title' => '性能设置',

            'cache' => [
                'title' => '清除缓存',
                'description' => '清除网站缓存',

                'status' => [
                    'cleared' => '缓存已成功清除',
                    'clear-error' => '清理缓存时出错',
                ],

                'actions' => [
                    'clear' => '清除缓存',
                ],
            ],

            'boost' => [
                'title' => 'AzBoost',
                'description' => 'AzBoost 通过添加更多专用缓存图层来提高您的网站性能',
                'info' => '如果您在启用扩展后有一些问题，您应该重新加载缓存',

                'current' => [
                    'status' => 'AzBoost目前 :state',
                    'enabled' => '<span class="text-success">已启用</span>',
                    'disabled' => '<span class="text-danger">已禁用</span>',
                ],

                'status' => [
                    'enabled' => 'AzBoost已启用',
                    'disabled' => 'AzBoost已禁用',
                    'reloaded' => 'AzBoost已重载',

                    'enable-error' => '启用 AzBoost时出错',
                ],

                'actions' => [
                    'enable' => '启用 AzBoost',
                    'disable' => '禁用AzBoost',
                    'reload' => '重新加载AzBoost',
                ],
            ],
        ],

        'seo' => [
            'title' => 'SEO 设置',

            'html-head-code' => '包含在所有页面的 <head> 中的 HTML 代码',
            'html-body-code' => '包含在所有页面的 <body> 中的 HTML 代码',

            'html-code-info' => '例如：Cookie 横幅、谷歌分析等',

            'welcome-popup' => [
                'enable' => '是否启用欢迎弹出窗口',
                'message' => '欢迎弹出消息',
                'info' => '此弹出窗口将在用户首次访问站点时显示',
            ],
        ],

        'auth' => [
            'title' => '认证',

            'conditions-url' => '条件 URL',
            'conditions-info' => '用户在注册时必须接受这些条件。',
            'enable-user-registration' => '启用用户注册',
            'enable-user-registration-label' => '仍然可以通过插件注册。',
            'auth-api' => '启用认证 API',
            'auth-api-label' => '此 API 允许您添加自定义身份验证到您的游戏服务器。 对于使用启动器的Minecraft服务器，您可以使用 <a href="https://github.com/Azuriom/AzAuth" target="_blank" rel="noopener noreferrer">AzAuth</a> 轻松快速集成。',
            'minecraft-verification' => '用 minecraft.net 启用 Minecraft用户名验证',
        ],

        'mail' => [
            'title' => '邮件设置',
            'from-address' => '电子邮件地址用于发送电子邮件。',
            'driver' => '电子邮件类型',
            'driver-info' => 'Azuriom 支持使用 SMTP 和 Sendmail 两种方式发送邮件。你可在此处找到更多有关邮件设置的信息 <a href="https://azuriom.com/docs" target="_blank" rel="noopener noreferrer">点击查看</a>',
            'disabled-warn' => '当电子邮件被禁用时，用户如果忘记密码，将无法重置密码。',
            'sendmail-warn' => '不推荐使用 Sendmail ，您应该在可能时使用 SMTP 服务器。',
            'smtp' => [
                'host' => 'SMTP 主机地址',
                'port' => 'SMTP 主机端口',
                'encryption' => '加密协议',
                'username' => 'SMTP 服务器用户名',
                'password' => 'SMTP 服务器密码',
            ],
            'enable-users-verification' => '启用用户电子邮件地址验证',
            'send' => '发送测试电子邮件',
            'sent' => '测试邮件已成功发送。',
        ],

        'maintenance' => [
            'title' => '维护设置',

            'enable' => '启用维护',
            'message' => '维护消息',
        ],

        'status' => [
            'updated' => '设置已更新。',
        ],
    ],

    'navbar-elements' => [
        'title' => '导航栏',
        'title-edit' => '编辑导航栏元素 :元素',
        'title-create' => '创建导航栏元素',

        'dropdown-info' => '当此元素被保存时，您可以将元素添加到这个下拉列表中。',

        'fields' => [
            'home' => '首页',
            'link' => '外部链接',
            'page' => '页',
            'post' => '帖子',
            'posts' => '帖子列表',
            'plugin' => '插件',
            'dropdown' => '下拉列表',
            'new-tab' => '在新标签中打开',
        ],

        'status' => [
            'nav-updated' => '导航栏已更新。',

            'created' => '已创建导航栏元素。',
            'updated' => '此导航栏元素已更新。',
            'deleted' => '此导航栏元素已被删除。',

            'not-empty' => '您不能删除带元素的下拉菜单。',
        ],
    ],

    'servers' => [
        'title' => '服务器',
        'title-edit' => '编辑服务器 :服务器',
        'title-create' => '添加服务器',

        'default' => '默认服务器',
        'default-info' => '如果当前主题支持，从默认服务器连接的玩家数量将显示在网站上。',

        'ping-no-commands' => 'ping 链接不需要插件，但是你不能用它执行命令。',
        'query-no-commands' => '使用查询链接，无法执行服务器上的命令。',

        'query-port-info' => '如果与游戏端口相同，可以为空。',

        'fields' => [
            'address' => '地址',
            'port' => '端口',

            'rcon-password' => 'Rcon 密码',
            'rcon-port' => 'Rcon 端口',
            'query-port' => '源查询端口',

            'azlink-port' => 'AzLink 端口',
        ],

        'actions' => [
            'verify-connection' => '验证连接',
        ],

        'azlink' => [
            'link' => '使用 AzLink，将Minecraft 连接到您的网站：',
            'link-1' => '<a href="https://azuriom.com/azlink">下载插件 AzLink</a> 并在您的服务器上安装它',
            'link-2' => '重新启动服务器',
            'link-3' => '在服务器上执行此命令： ',

            'link-info' => '您可以使用此命令将您的Minecraft服务器与您的网站链接：',
            'port-info' => '如果您未使用 AzLink 的默认端口，您必须用命令对齐进行配置： ',

            'enable-ping' => '启用即时命令（需要在服务器上打开端口）',
            'ping-info' => '当未启用即时命令时，命令将在 30 秒到1 分钟内执行。',
            'custom-port' => '使用自定义 AzLink 端口',
        ],

        'players' => ':count 播放器 |:count 播放器',
        'offline' => '离线的',

        'status' => [
            'created' => '服务器已添加。',
            'updated' => '服务器已更新。',
            'deleted' => '服务器已被删除。',

            'connect-success' => '已成功连接到服务器！',
            'connect-error' => '服务器连接失败：:错误',

            'not-azlink' => '此服务器未通过 Azlink 连接。',
            'azlink-connect' => '服务器连接失败，地址和/或端口不正确，或端口已关闭。',
            'azlink-badresponse' => '服务器连接失败 (代码 :code), 令牌无效或服务器配置错误。 您可以重做链接命令来解决这个问题。',
        ],

        'type' => [
            'mc-ping' => 'Minecraft Ping',
            'mc-rcon' => 'Minecraft RCON',
            'mc-azlink' => 'AzLink',
            'source-query' => '源查询',
            'source-rcon' => '源RCON',
            'bedrock-ping' => '床岩Ping',
            'bedrock-rcon' => 'Bedrock RCON',
            'fivem-status' => 'FiveM status',
            'fivem-rcon' => 'FiveM RCON',
            'rust-rcon' => 'Rust RCON',
            'flyff-server' => 'Flyff 服务器', // TODO make this dynamic
        ],
    ],

    'users' => [
        'title' => '用户',
        'title-edit' => '编辑用户 :user',
        'title-create' => '创建用户',

        'fields' => [
            'register-date' => '注册于',
            'last-login' => '上次登录时间',
            'email-verified' => '电子邮件地址已验证',
            '2fa' => '两步验证',
            'ip' => 'IP 地址',
        ],

        'info' => [
            'admin' => '管理员',
            'banned' => '封禁',
            'deleted' => '已删除',
        ],

        'actions' => [
            'ban' => '封禁',
            'unban' => '解除封禁',
            'delete' => '删除',
            'verify-email' => '验证电子邮件',
            'disable-2fa' => '禁用2fa',
        ],

        'alert-deleted' => '此用户已被删除，无法编辑。',
        'alert-banned' => [
            'title' => '此用户目前被禁止：',
            'banned-by' => '被禁止：:作者',
            'reason' => '原因：:原因',
            'date' => '日期: :日期',
        ],

        'edit-profile' => '编辑配置文件',

        'user-info' => '用户信息',

        'ban-title' => 'Ban :user',
        'ban-description' => '您确定要封禁此用户吗？',

        'status' => [
            'created' => '用户已创建。',
            'updated' => '此用户已更新。',
            'deleted' => '此用户已被删除。',

            'email-verified' => '电子邮件地址已被验证。',
            '2fa-disabled' => '两因素认证已被禁用。',

            'banned' => '此用户已被禁止。',
            'unbanned' => '此用户已被取消封禁。',
        ],
    ],

    'roles' => [
        'title' => '角色',
        'title-edit' => '编辑角色 :role',
        'title-create' => '创建角色',

        'permissions' => '权限',
        'perm-admin' => [
            'label' => '管理员',
            'info' => '当该群组是管理员时，它拥有所有权限。',
        ],

        'info' => [
            'default' => '默认设置',
            'admin' => '管理员',
        ],

        'status' => [
            'power-updated' => '角色已更新。',
            'created' => '角色已创建。',
            'updated' => '此角色已更新。',
            'deleted' => '此角色已被删除。',

            'unauthorized' => '此角色高于您自己的角色。',
            'add-admin' => '您不能将管理员权限添加到角色。',
            'remove-admin' => '您不能删除您角色的管理员权限。',
            'permanent-role' => '此角色不能被删除。',
            'own-role' => '您不能删除您的角色。',
        ],
    ],

    'permissions' => [
        'create-comments' => '评论一个帖子',
        'delete-other-comments' => '从另一个用户删除一个帖子评论',
        'maintenance-access' => '维护期间访问网站',
        'admin-access' => '访问管理员控制面板',
        'admin-logs' => '查看和管理站点日志',
        'admin-images' => '查看和管理图像',
        'admin-navbar' => '查看和管理导航栏',
        'admin-pages' => '查看和管理页面',
        'admin-posts' => '查看和管理帖子',
        'admin-settings' => '查看和管理设置',
        'admin-users' => '查看和管理用户',
        'admin-themes' => '查看和管理主题',
        'admin-plugins' => '查看和管理插件',
    ],

    'bans' => [
        'title' => '封禁',

        'fields' => [
            'banned-by' => '被封禁的',
            'reason' => '原因',
        ],

        'removed' => '由 :user 删除 :date',
    ],

    'posts' => [
        'title' => '员额',
        'title-edit' => '编辑帖子 :posts',
        'title-create' => '创建帖子',

        'published-info' => '此帖子将在此日期之前不会公开可见。',

        'fields' => [
            'published-at' => '发布于',
        ],

        'pin' => '固定此帖子',

        'status' => [
            'created' => '帖子已创建。',
            'updated' => '此帖已被修改。',
            'deleted' => '此帖子已被删除。',
        ],

        'info' => [
            'pinned' => '固定的',
        ],
    ],

    'pages' => [
        'title' => '页 次',
        'title-edit' => '编辑页面 #:page',
        'title-create' => '创建页面',

        'enable' => '启用页面',

        'status' => [
            'created' => '页面已创建。',
            'updated' => '此页面已更新。',
            'deleted' => '此页面已被删除。',
        ],
    ],

    'images' => [
        'title' => '图像',
        'title-edit' => '编辑图像 :image',
        'title-create' => '上传图片',

        'status' => [
            'created' => '图片已创建。',
            'updated' => '此图像已更新。',
            'deleted' => '此图像已被删除。',
        ],
    ],

    'extensions' => [
        'buy' => '购买 :price',
    ],

    'plugins' => [
        'title' => '插件',

        'installed' => '已安装的插件',
        'available' => '可用插件',

        'azuriom-requirement' => '此插件与您的 Azuriom 版本不兼容。',
        'game-requirement' => '此插件与游戏 :game 不兼容。',
        'plugin-requirement' => '插件“:plugin”缺失或其版本不兼容此插件。',

        'status' => [
            'reloaded' => '插件已重新装入。',
            'enabled' => '插件已启用。',
            'disabled' => '插件已被禁用。',
            'updated' => '插件已更新。',
            'installed' => '插件已经安装。',
            'deleted' => '插件已被删除。',

            'error-delete' => '必须先禁用插件才能删除。',
        ],
    ],

    'themes' => [
        'title' => '主题',

        'current' => [
            'title' => '当前主题',
            'author' => '作者：:作者',
            'version' => '版本: :版本',
        ],
        'installed' => '已安装的主题',
        'available' => '可用主题',
        'no-enabled' => '您没有启用任何主题。',

        'actions' => [
            'edit-config' => '编辑配置',
            'disable' => '禁用主题',
        ],

        'status' => [
            'reloaded' => '主题已重新加载。',
            'no-config' => '此主题没有配置。',
            'config-updated' => '主题配置已更新。',
            'invalid' => '此主题无效(主题文件夹名称必须是主题id)。',
            'updated' => '主题已更新。',
            'installed' => '主题已安装。',
            'deleted' => '主题已被删除。',

            'error-delete' => '您不能删除当前主题。',
        ],
    ],

    'update' => [
        'title' => '更新',

        'subtitle-update' => '可用更新',
        'subtitle-no-update' => '没有可用的更新',

        'update' => 'Azuriom的版本 <code>:last-version</code> 可用，您在版本 <code>:version</code>',
        'download' => 'Azuriom的最新版本已准备好下载。',
        'install' => 'Azuriom的最新版本已下载，已准备就绪。',

        'backup-info' => '在更新 Azuriom之前，您应该备份您的网站！',

        'up-to-date' => '您正在运行最新版本的 Azuriom: <code>:version</code>。',

        'status' => [
            'download-success' => '最新版本已下载，您现在可以安装。',
            'install-success' => '更新已安装成功。',

            'up-to-date' => '您正在使用最新版本的 Azuriom。',
            'error-fetch' => '获取更新时发生错误: :错误',
            'error-download' => '下载时出错：:错误',
            'error-install' => '安装时出错：:错误',
        ],

        'actions' => [
            'check' => '检查更新',
            'install' => '安装',
            'download' => '下载',
        ],
    ],

    'logs' => [
        'title' => '日志',

        'actions' => [
            'clear' => '清除旧日志 (15d+)',
        ],

        'status' => [
            'cleared' => '旧日志已被删除。',
        ],

        'pages' => [
            'created' => '创建页面 #:id',
            'updated' => '更新页面 #:id',
            'deleted' => '删除页面 #:id',
        ],

        'posts' => [
            'created' => '创建帖子 #:id',
            'updated' => '更新帖子 #:id',
            'deleted' => '已删除帖子 #:id',
        ],

        'images' => [
            'created' => '创建图像 #:id',
            'updated' => '更新图像 #:id',
            'deleted' => '已删除图像 #:id',
        ],

        'roles' => [
            'created' => '创建角色 #:id',
            'updated' => '更新角色 #:id',
            'deleted' => '删除角色 #:id',
        ],

        'servers' => [
            'created' => '创建服务器 #:id',
            'updated' => '更新服务器 #:id',
            'deleted' => '已删除服务器 #:id',
        ],

        'users' => [
            'updated' => '更新用户 #:id',
            'deleted' => '已删除用户 #:id',
            'transfer' => '向用户 #:id 发送钱 :money',
        ],

        'settings' => [
            'updated' => '更新设置',
        ],

        'updates' => [
            'installed' => '已安装 Azuriom 更新',
        ],

        'plugins' => [
            'enabled' => '已启用的插件',
            'disabled' => '已禁用插件',
        ],

        'themes' => [
            'changed' => '更改主题',
        ],
    ],

    'errors' => [
        'back' => '回到仪表板',
        '404' => '找不到页面',
        'info' => '看起来你在矩阵中发现了一处小暗色...',
    ],
];
