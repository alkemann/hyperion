<?php
$faker = Faker\Factory::create();
$company = $faker->company();
?>
<h2 class="text-xl mb-2">About <?=$company?></h2>
<p>Here at <strong><?=$company?></strong> we believe in <strong><?=$faker->bs()?></strong>
to maximize our ability to develiver <strong><?=$faker->catchPhrase()?></strong>!
</p>
<p><?=$faker->realText()?></p>
<h3 class="mt-3">Meet the team!</h3>
<ul class="mt-2 mb-6 ml-3 list-disc list-inside">
  <li><strong><?=$faker->firstName()?></strong> CEO</li>
  <?php for($i = 0 ; $i < 5; $i++)  : ?>
  <li><strong><?=$faker->firstName()?></strong> <?=$faker->jobTitle()?></li>
  <?php endfor; ?>
</ul>
<p><?=$faker->realText()?></p>
<p><?=$faker->realText()?></p>
