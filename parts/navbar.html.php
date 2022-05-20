<?php $b = (isset($sidebar) && $sidebar === false) ? '' : 'hx-boost="true"' ?>


<div
  x-data="{ 'showModal': false }"
  @keydown.escape="showModal = false"
>
  <nav class="border-y-orange-600 border-y-2 py-1 px-2">
    <ul hx-target="#content">
      <li><a href="/" <?=$b?>>Home</a></li>
      <li><a href="/about" <?=$b?>>About</a></li>
      <li><a href="/todo" <?=$b?>>Todo</a></li>
      <li><a href="/news">News</a></li>
      <li class="flex-grow">&nbsp;</li>

      <?php if ($username = $this->request()->session('user')) : ?>
        <li>
          <?=$username?>
        </li>
        <li class="">
          <a href="/logout"  hx-boost="false" >Log out</a>
        </li>
      <?php else : ?>
      <li class="">
        <a type="button" @click="showModal = true" >Login</a>
      </li>
      <?php endif; ?>
    </ul>
  </nav>
  <?php if (!$this->request()->session('user')) echo $this->part('login'); ?>
</div>
