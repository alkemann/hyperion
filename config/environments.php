<?php

use alkemann\h2l\{ Log, Environment, Request, Response, util\Chain, response\Page };

$base = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR ;

Environment::set([
    Environment::LOCAL => [
        'debug' => true,
        'content_path' => $base . 'pages' . DIRECTORY_SEPARATOR,
        'layout_path'  => $base . 'layouts' . DIRECTORY_SEPARATOR,
        'parts_path'   => $base . 'parts' . DIRECTORY_SEPARATOR,
    ],
    Environment::DEV => [
        'debug' => true,
        'content_path' => $base . 'pages' . DIRECTORY_SEPARATOR,
        'layout_path'  => $base . 'layouts' . DIRECTORY_SEPARATOR,
        'parts_path'   => $base . 'parts' . DIRECTORY_SEPARATOR,
    ],
    Environment::PROD => [
        'debug' => false,
        'content_path' => $base . 'pages' . DIRECTORY_SEPARATOR,
        'layout_path'  => $base . 'layouts' . DIRECTORY_SEPARATOR,
        'parts_path'   => $base . 'parts' . DIRECTORY_SEPARATOR,
    ]
], Environment::ALL);

Log::handler('standard', [Log::class, 'std']);

// Middleware to add a log response for request and what response handler is chosen
Environment::addMiddle(
    function(Request $request, Chain $chain): ?Response {
        Log::debug("== REQUEST: {$request->method()} '{$request->url()}' ==");
        $response = $chain->next($request);
        if ($response) Log::debug("== Response Handler: " . get_class($response));
        else Log::debug("== Null Response");
        return $response;
    },
    Environment::ALL
);
Environment::addMiddle(function(Request $request, Chain $chain): Response {
    $response = $chain->next($request, $chain);
    if ($response instanceof Page && $request->header('HX-Request')) {
        Log::debug('== HTMX Request ===');
        $response->layout = $request->header('HX-Boosted') ? 'boosted' : false ;
    }
    return $response;
}, Environment::ALL);


// LOCAL or PROD expected
Environment::setEnvironment(getenv('ENV') === false ? Environment::PROD : getenv('ENV'));


// Check for server host and set environment here for example
