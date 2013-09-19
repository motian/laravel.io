<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Foundation 4</title>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('stylesheets/app.css') }}">
  <script src="asset('javascripts/vendor/custom.modernizr.js') }}"></script>
</head>
<body>

@include('layouts._top_nav')
<!-- Load Content -->
{{ $content }}

</body>
</html>
