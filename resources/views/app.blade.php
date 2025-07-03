<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @inertiaHead
  </head>
  <body class="bg-white text-primary dark:text-secondary font-sans antialiased">
    @inertia
  </body>
</html>