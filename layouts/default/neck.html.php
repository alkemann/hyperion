<header class="">
  <h1 class="px-2"><a href="/">Hyperion</a></h1>
  <h5 class="text-sm px-2">A HTML focused way, using HTMX, Apline.js, Tailwind ad H2L</h5>
  <nav class="border-y-orange-600 border-y-2 py-1 px-2">
    <ul hx-target="#content" hx-boost="true">
      <li><a href="/">Home</a></li>
      <li><a href="/one">About</a></li>
      <li><a href="/two">Blog</a></li>
      <li><a href="/three">News</a></li>
      <li class="flex-grow">&nbsp;</li>

      <li class=""><a href="/login">Login</a></li>
    </ul>
  </nav>
</header>
<div id="main-wrapper" class="flex gap-6 flex-row-reverse mt-4 mx-2">
  <div id="side-bar" class="border p-4 text-sm max-w-xs">
    <?php $faker = Faker\Factory::create(); ?>
    <h3 class="text-xl mb-4">News</h3>
    <div class="my-3">
      <h5 class="text-lg"><?=$faker->catchPhrase()?></h5>
      <p><?=$faker->text()?></p>
      <p> - <?=$faker->name()?></p>
    </div>
    <div class="my-3">
      <h5 class="text-lg"><?=$faker->catchPhrase()?></h5>
      <p><?=$faker->text()?></p>
      <p> - <?=$faker->name()?></p>
    </div>
    <div class="my-3">
      <h5 class="text-lg"><?=$faker->catchPhrase()?></h5>
      <p><?=$faker->text()?></p>
      <p> - <?=$faker->name()?></p>
    </div>
  </div>
  <div id="content" class="">
