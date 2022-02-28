@include('layouts.includes.header')
@include('layouts.includes.upperfooter')
    @include('layouts.includes.navbar')
    <div class="mb-5">
      @yield('content')

    </div>  

      @include('layouts.includes.footer')

