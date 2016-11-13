<!DOCTYPE html>
<html>
<head>
  @include('partials._head')
</head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1137933492959132";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      @include('partials._navbar')

      @include('partials._intro')

                  <!--<h2>{{ $obj->name." ".$obj->email}}</h2>-->

      @include('partials._about')

      @include('partials._services')

      @include('partials._contact')

      @include('partials._footer')

      @include('partials._javascript')

    </body>
</html>
