<?php
$this->layout = 'news';
$faker = Faker\Factory::create();
?>

<h2 class="text-xl mb-2">News</h2>
<?php for($i = 0 ; $i < 5; $i++): ?>
  <div class="my-3">
    <h5 class="text-lg"><?=$faker->catchPhrase()?></h5>
    <p class="pl-1 italic text-sm text-gray-500"><?=$faker->state()?> - <?=$faker->date('d M.')?> - <?=$faker->name()?></p>
    <p><?=$faker->realText()?></p>
  </div>
<?php endfor; ?>
