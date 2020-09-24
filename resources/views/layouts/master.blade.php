<!DOCTYPE html>
<html  >
    <head>
      
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">     
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="/assets/images/mbr-155x153.png" type="image/x-icon">
        <meta name="description" content="{{setting('site.description')}}">


        <title>{{setting('site.title')}}</title>
        <link rel="stylesheet" href="/assets/web/assets/mobirise-icons2/mobirise2.css">
        <link rel="stylesheet" href="/assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
        <link rel="stylesheet" href="/assets/tether/tether.min.css">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="/assets/web/assets/gdpr-plugin/gdpr-styles.css">
        <link rel="stylesheet" href="/assets/dropdown/css/style.css">
        <link rel="stylesheet" href="/assets/socicon/css/styles.css">
        <link rel="stylesheet" href="/assets/theme/css/style.css">
        <link rel="preload" as="style" href="/assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">



    </head>
    <body>

        @include('partials.nav')
        @yield('content')
        @include('partials.footer')
        
    </body>
</html>