<?php if ($this->request->header('HX-Request') === null) {
  throw new alkemann\h2l\exceptions\InvalidUrl('');
} ?>
<?php
$this->setData('sidebar', false);
$faker = Faker\Factory::create();
?>
<?php for($i = 0 ; $i < 5; $i++) {
  echo $this->part('news/card');
} ?>
