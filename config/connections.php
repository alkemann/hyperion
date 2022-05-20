<?php

use alkemann\h2l\Connections;
use alkemann\h2l\data\PDO;

$db_url = getenv('NF_POSTGRESQL_POSTGRES_URI') ??  getenv('DATABASE_URL') ?? false;
if ($db_url) {
    $options = parse_url($db_url);
    $options['db'] = ltrim($options['path'], '/');
    Connections::add('default', function() use ($options) { return new PDO($options); });
}
