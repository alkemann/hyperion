<?php
$faker = Faker\Factory::create();
?>
<div class="my-3">
  <h5 class="text-lg"><?=$faker->catchPhrase()?></h5>
  <p class="pl-1 italic text-sm text-gray-500"><?=$faker->state()?> - <?=$faker->date('d M.')?> - <?=$faker->name()?></p>
  <p><?=$faker->realText()?></p>
</div>
