<?php $faker = Faker\Factory::create(); ?>

<h2 class="text-xl mb-2">Home</h2>
<hr>
<div>
  <dl>
    <dt>faker->name()</dt><dd><?=$faker->name()?></dd>
    <dt>faker->email()</dt><dd><?=$faker->email()?></dd>
    <dt>faker->text()</dt><dd><?=$faker->catchPhrase()?></dd>
</dl>
</div>