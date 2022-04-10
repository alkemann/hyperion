<header class="">
  <h1 class="px-2"><a href="/">Hyperion</a></h1>
  <h5 class="text-sm px-2">A HTML focused way, using HTMX, Apline.js, Tailwind ad H2L</h5>
  <nav class="border-y-orange-600 border-y-2 py-1 px-2">
    <ul hx-target="#content">
      <li><a href="/" hx-boost="true">Home</a></li>
      <li><a href="/about" hx-boost="true">About</a></li>
      <li><a href="/todo" hx-boost="true">Todo</a></li>
      <li><a href="/news">News</a></li>
      <li class="flex-grow">&nbsp;</li>
      <li class=""><a href="/login">Login</a></li>
    </ul>
  </nav>
</header>
<div id="main-wrapper" class="flex gap-6 flex-row-reverse mt-4 mx-2">
  <div id="side-bar" class="border p-4 text-sm max-w-xs">
    <?php $faker = Faker\Factory::create(); ?>
    <h3 class="text-xl mb-4"><a href="/news">News</a></h3>

    <?php for($i = 0 ; $i < 3; $i++): ?>
    <div class="my-3">
      <h5 class="text-lg"><?=$faker->catchPhrase()?></h5>
      <p class="pl-1 italic text-sm text-gray-500"><?=$faker->country()?> - <?=$faker->date('d M.')?></p>
      <p><?=$faker->realText()?></p>
    </div>
    <?php endfor; ?>
    <hr>
    <div class="p-1 text-center">
      <a href="/news" class="underline">More news</a>
    </div>

  </div>
  <div id="content" class="flex-grow">
