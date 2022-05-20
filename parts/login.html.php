<div
    class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
    x-show="showModal"
  >
  <div
    class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
    @click.away="showModal = false"
    x-transition:enter="motion-safe:ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
  >
    <form action="/login" method="POST" >
      <input type="text" name="username" id="username" placeholder="Username / Email" value="" class="block my-2 border px-2 py-1">
      <input type="password" name="password" id="password" placeholder="Your password" value="" class="block my-2 border px-2 py-1">
      <input type="submit" value="Login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>
  </div>
</div>