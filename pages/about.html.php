<?php
$faker = Faker\Factory::create();
$company = $faker->company();
?>
<h2 class="text-xl mb-2">About <?=$company?></h2>
<hr>
<p>Here at <strong><?=$company?></strong> we believe in <strong><?=$faker->bs()?></strong>
to maximize our ability to develiver <strong><?=$faker->catchPhrase()?></strong>!
</p>
<p><?=$faker->realText()?></p>
<h3 class="mt-3">Meet the team!</h3>
<ul class="my-2 ml-3 list-disc list-inside">
  <li>CEO <?=$faker->firstName()?> <?=$faker->lastName()?></li>
  <?php for($i = 0 ; $i < 5; $i++)  : ?>
  <li><?=$faker->jobTitle()?> <?=$faker->firstName()?> <?=$faker->lastName()?></li>
  <?php endfor; ?>
</ul>
<p><?=$faker->realText()?></p>
<p><?=$faker->realText()?></p>
