<?php

namespace app;

use alkemann\h2l\traits\{ Entity, Model };

class User
{

  use Model, Entity;

  protected static $table = 'users';

}
