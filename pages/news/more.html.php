<?php if ($this->request->header('HX-Request') === null) {
  throw new alkemann\h2l\exceptions\InvalidUrl('');
} ?>

<?php
$this->setData('sidebar', false);
$faker = Faker\Factory::create();
?>

<h2 class="text-xl mb-2">News</h2>
<?php for($i = 0 ; $i < 5; $i++) {
  echo $this->part('news/card');
} ?>
