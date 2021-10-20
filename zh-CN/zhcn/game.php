<?php

return [
    'steam' => [
        'id' => 'SteamID',
        'commands' => '您可以为玩家用户名使用 <code>{name}</code> <code>{steam_id}</code> 给玩家SteamID 64 和 <code>{steam_id_32}</code> 给玩家SteamID 32',
    ],

    'minecraft' => [
        'id' => 'UUID',
        'commands' => '你可以使用 <code>{name}</code> 来获取玩家的用户名, <code>{uuid}</code> 来获取玩家 UUUID',
    ],

    'minecraft_bedrock' => [
        'id' => 'XUID',
        'commands' => '你可以使用 <code>{name}</code> 来使用玩家的用户名, <code>{xuid}</code> 来使用玩家XUID',
    ],
];
