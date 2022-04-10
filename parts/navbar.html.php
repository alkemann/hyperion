<?php $b = (isset($sidebar) && $sidebar === false) ? '' : 'hx-boost="true"' ?>

<nav class="border-y-orange-600 border-y-2 py-1 px-2">
    <ul hx-target="#content">
      <li><a href="/" <?=$b?>>Home</a></li>
      <li><a href="/about" <?=$b?>>About</a></li>
      <li><a href="/todo" <?=$b?>>Todo</a></li>
      <li><a href="/news">News</a></li>
      <li class="flex-grow">&nbsp;</li>
      <li class=""><a href="/login">Login</a></li>
    </ul>
  </nav>