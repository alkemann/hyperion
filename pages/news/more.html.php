<?php if ($this->request->header('HX-Request') === null) {
  throw new alkemann\h2l\exceptions\InvalidUrl('');
} ?>

