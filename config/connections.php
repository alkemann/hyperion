<?php

use alkemann\h2l\Connections;
use alkemann\h2l\data\PDO;

$host = getenv('NF_POSTGRESQL_HOST');
if ($host) {
    $options['scheme'] = 'postgres';
    $options['host'] = $host;
    $options['user'] = getenv('NF_POSTGRESQL_USERNAME');
    $options['pass'] = getenv('NF_POSTGRESQL_PASSWORD');
    $options['db'] = getenv('NF_POSTGRESQL_DATABASE');
    $options['port'] = 5432;
    Connections::add('default', function() use ($options) { return new PDO($options); });
}
