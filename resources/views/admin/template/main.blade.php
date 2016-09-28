<!DOCTYPE html>
    <head>
      <html lang="es">
      <meta =charset="URF-8">
      <title> @yield('title', 'Default') | Panel de Administración</title>
      <link rel="stylesheet"  href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}" >
    </head>
    <body>
      @include('admin.template.partials.nav')
      <section>
        @include('flash::message')
        @include('admin.template.partials.errors')
        @yield('content')
      </section>

    <script src=" {{ asset('plugins/jquery/js/jquery-3.1.0.js') }}"></script>
    <script src=" {{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    </body>
</html>
