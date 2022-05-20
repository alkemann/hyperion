<?php

use alkemann\h2l\{ Log, Environment, Router, Request, Response, Session };
use alkemann\h2l\{ util\Http, response\Page, response\Html };
use app\User;

Router::alias('/', 'home.html');

Router::add('user', function(Request $request) {
    $user = \app\User::get(1);
    dd($user);
});

Router::add('login', function(Request $request): Response {
  $q = [
    'username' => $request->param('username') ?? false,
    'password' => $request->param('password') ?? false,
  ];

  $users = User::findAsArray($q);
  if (!$users) return new Html("", 403);
  $user = array_pop($users);
  $request->session()->set('user', $user->username);
  return $request->redirect('/');
}, Http::POST);

Router::add('logout', function(Request $request) {
  $request->session()->destroy();
  return $request->redirect('/');
});


