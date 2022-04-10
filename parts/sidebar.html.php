
<div id="side-bar" class="border p-4 text-sm max-w-xs">
  <?php $faker = Faker\Factory::create(); ?>
  <h3 class="text-xl mb-4"><a href="/news">News</a></h3>
  <?php for($i = 0 ; $i < 3; $i++) echo $this->part('news/card'); ?>
  <hr>
  <div class="p-1 text-center">
    <a href="/news" class="underline">More news</a>
  </div>
</div>
