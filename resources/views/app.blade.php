<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Inertia Vue 3 App</title>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
  @inertia
  <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>