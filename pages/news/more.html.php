<?php

if ($this->request->header('HX-Request') === null) {
  throw new alkemann\h2l\exceptions\InvalidUrl('');
}

usleep(600000);

$page = $this->request->param('page');
$next = $page ? ($page+1) : 2;

$this->setData('sidebar', false);
$faker = Faker\Factory::create();

for($i = 0 ; $i < 5; $i++) { echo $this->part('news/card'); }

if ($next && $next < 5) : ?>
<div hx-trigger="revealed" hx-get="/news/more?page=<?=$next?>" hx-swap="outerHTML">
  <img class="htmx-indicator w-10 mx-auto text-center" src="/img/1481.gif" />
</div>
<?php else: ?>
<div class="text-red-500 my-3 mx-auto text-center"> -- END : No more pages -- </div>
<?php endif; ?>