<?php $faker = Faker\Factory::create(); ?>

<h2 class="text-xl mb-2">Hyper</h2>
<p>This is an app to test out and demonstrate  a HTML focused way, using HTMX, Apline.js, Tailwind ad H2L</p>
<hr>
<h3>Features</h3>
<ol>
  <li>Partial page content (replace content, keep sidebar)</li>
  <ul class="ml-4">
    <li><a href="https://htmx.org/docs/#boosting">HTMX Boosting</a></li>
  </ul>
  <li>Polling (the news sidebar is refreshed every 20 seconds independent of other boosted navigation</li>
  <ul class="ml-4">
    <li><a href="https://htmx.org/docs/#polling">HTMX Polling</a></li>
  </ul>
  <li>Endless scroll (Try scrolling on the <a href="/news">news section</a>)</li>
  <ul class="ml-4">
    <li>Using <code>hx-trigger</code> with the <code>revealed</code> value is all it takes to load more in an endless scroll</li>
    <li><code>&lt;div hx-trigger="revealed" hx-get="/news/more" hx-swap="outerHTML">&lt;/div></code></li>
    <li>Each response addes another revealed trigger to continue, or omits it to end the chain.</li>
    <li>A sleep is ended in the more view to simulate load time so we can see the load indicator</li>
  </ul>
  <li>A todo list?</li>
</ol>