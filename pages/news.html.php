<?php
$this->setData('sidebar', false);
$faker = Faker\Factory::create();
?>

<h2 class="text-xl mb-2">News</h2>
<?php for($i = 0 ; $i < 5; $i++) {
  echo $this->part('news/card');
} ?>

<div hx-trigger="revealed" hx-get="/news/more?page=2" hx-swap="outerHTML">
  <img class="htmx-indicator w-10 mx-auto text-center" src="/img/1481.gif" />
</div>