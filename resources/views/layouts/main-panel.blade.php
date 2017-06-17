<div class="main-panel">
      @include('layouts.nav')
      <div class="content" style="margin-top:40px">
          <div class="container-fluid">
              @yield('content')
          </div>
      </div>
      @include('layouts.footer')
  </div>
