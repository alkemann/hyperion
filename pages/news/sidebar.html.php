<?php

if ($this->request->header('HX-Request') === null) {
  throw new alkemann\h2l\exceptions\InvalidUrl('');
}

usleep(400000);

for($i = 0 ; $i < 5; $i++) { echo $this->part('news/card'); }
