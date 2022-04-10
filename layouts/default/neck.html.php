<header class="">
  <h1 class="px-2"><a href="/">Hyperion</a></h1>
  <h5 class="text-sm px-2">A HTML focused way, using HTMX, Apline.js, Tailwind and H2L.</h5>
  <?php echo $this->part('navbar')?>
</header>
<div id="main-wrapper" class="flex gap-6 flex-row-reverse mt-4 mx-2">
  <?php if (!isset($sidebar) || $sidebar) echo $this->part('sidebar') ?>
  <div id="content" class="flex-grow">
