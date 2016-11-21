<!DOCTYPE html>
<html lang="en">

@include('partials.header_partial')

<body>

@include('partials.messages_partial')


@if(Session::has('id'))
  @include('navs.user_nav')
@else
  @include('navs.guest_nav')
@endif


@yield('content')

@include('partials.footer_partial')


@yield('script')

</body>
</html>