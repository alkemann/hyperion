<?php
$faker = Faker\Factory::create();
?>

<h2 class="text-xl mb-2">Three</h2>
<div>
  <dl>
    <dt>faker->name()</dt><dd><?=$faker->name()?></dd>
    <dt>faker->email()</dt><dd><?=$faker->email()?></dd>
    <dt>faker->text()</dt><dd><?=$faker->text()?></dd>
  </dl>
</div>