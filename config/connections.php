<?php

use alkemann\h2l\{ Connections, Log };
use alkemann\h2l\data\PDO;

$db_url = getenv('NF_POSTGRESQL_POSTGRES_URI');
if (!$db_url) $db_url = getenv('DATABASE_URL');
if ($db_url) {
    Log::debug(print_r($db_url, true));
    $options = parse_url($db_url);
    $options['db'] = ltrim($options['path'], '/');
    Connections::add('default', function() use ($options) { return new PDO($options); });
} else {
    Log::error("NO DB CONNECTED");
}
