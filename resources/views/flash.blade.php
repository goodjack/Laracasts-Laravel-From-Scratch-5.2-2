@if (session()->has('flash_message')) {{--(Session::has('flash_message'))--}}
        {{-- <div class="alert alert-{{ Session::get('flash_message_level') }}" role="alert"> --}}
        <div class="alert alert-{{ session('flash_message_level') }}" role="alert">
            {{-- Session::get('flash_message') --}}
            {{ session('flash_message') }}
        </div>
@endif