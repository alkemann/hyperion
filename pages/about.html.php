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

<!-- model demo -->
<div
     x-data="{ open: false }"
     x-show.transition.duration.500ms="open"
     x-cloak
     X-init="_ => setTimeout(_ => open = true, 2000)"
     class="fixed inset-0 bg-white bg-opacity-75 flex items-center justify-center px-4 md:px-0">
  <div
       @click.away="open = false"
       class="flex flex-col bg-white shadow-2xl rounded-lg border-2 border-gray-400 p-6">
    <div class="flex justify-between items-center mp-4">
      <h4 class="font-bold text-2xl mt-0 mb-0">Hey there!</h4>
      <button @click="open = false">close</button>
    </div>
    <div class="mt-1 max-w-xs">
      <p class="">Would you like us to contact you?</p>
      <img class="w-full" src="/img/Placeholder.png" alt="Placeholder">
    </div>
  </div>
</div>
