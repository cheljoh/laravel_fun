@if (session()->has('flash_message'))
  {{-- ^use helper instead of Session --}}
  {{-- flash_message is a key/value pair --}}
  <div class="text-center alert alert--{{ session('flash_message_level') }}">
    {{ session('flash_message') }}
  </div>
@endif
