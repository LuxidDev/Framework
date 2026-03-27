<?php

component('layouts/AppLayout', function ($c) {
  $c->state(function () {
    return [
      'title' => 'Luxid Framework',
      'description' => 'Modern PHP framework with reactive Nova components'
    ];
  });

  $c->view(function ($state) {
    $content = \Luxid\Nova\Slot::render('content', '');
?>
    <!DOCTYPE html>
    <html lang="en" class="scroll-smooth">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@echo($state->title)</title>
      <link rel="icon" href="/favicon.ico" type="image/x-icon">
      <script src="https://cdn.tailwindcss.com"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <style>
        /* ... all the styles ... */
      </style>
    </head>

    <body class="bg-black text-white overflow-x-hidden">
      <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 bg-grid opacity-20"></div>
        <div class="glow-orb w-96 h-96 bg-white top-0 -left-48 opacity-5"></div>
        <div class="glow-orb w-80 h-80 bg-gray-800 top-1/3 right-0 opacity-10"></div>
        <div class="glow-orb w-72 h-72 bg-gray-900 bottom-0 left-1/4 opacity-10"></div>
      </div>

      <?php
      echo \Luxid\Nova\Slot::render('content', '<div class="min-h-screen flex items-center justify-center"><div class="text-center"><h1 class="text-4xl">Default Content</h1></div></div>');
      ?>

      <script src="/nova.js"></script>
    </body>

    </html>
<?php
  });
});
