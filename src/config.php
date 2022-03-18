<?php

return [
    'node' => [
        'host' => env('QF_CLUE_JSON_NODE_HOST', '127.0.0.1'),
        //jsonrpc
        'port' => env('QF_CLUE_JSON_NODE_PORT', 9703),
        //jsonrpc-http
        'port_http' => env('QF_CLUE_NODE_PORT_HTTP', 9701)
    ]
];