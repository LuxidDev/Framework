<?php

component('layouts/AppLayout', function ($c) {
  $c->state(function () {
    return [
      'title' => 'Luxid Framework',
      'description' => 'Modern PHP framework with reactive Nova components'
    ];
  });

  $c->view(function ($state) {
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
        * {
          font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        @keyframes gradientFlow {

          0%,
          100% {
            background-position: 0% 50%;
          }

          50% {
            background-position: 100% 50%;
          }
        }

        @keyframes pulse-glow {

          0%,
          100% {
            opacity: 0.05;
            filter: blur(40px);
          }

          50% {
            opacity: 0.1;
            filter: blur(60px);
          }
        }

        .glass-effect {
          background: rgba(0, 0, 0, 0.4);
          backdrop-filter: blur(10px);
          border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-primary {
          background: linear-gradient(135deg, #111111 0%, #000000 100%);
          border: 1px solid rgba(255, 255, 255, 0.1);
          transition: all 0.3s ease;
        }

        .btn-primary:hover {
          background: linear-gradient(135deg, #222222 0%, #111111 100%);
          border-color: rgba(255, 255, 255, 0.3);
          box-shadow: 0 0 30px rgba(255, 255, 255, 0.1);
        }

        .btn-secondary {
          background: rgba(255, 255, 255, 0.05);
          border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-secondary:hover {
          background: rgba(255, 255, 255, 0.1);
          border-color: rgba(255, 255, 255, 0.2);
        }

        .bg-grid {
          background-image: linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
          background-size: 50px 50px;
        }

        @keyframes fadeInUp {
          from {
            opacity: 0;
            transform: translateY(30px);
          }

          to {
            opacity: 1;
            transform: translateY(0);
          }
        }

        .animate-fade-in-up {
          animation: fadeInUp 0.8s ease-out forwards;
        }

        .delay-100 {
          animation-delay: 0.1s;
        }

        .delay-200 {
          animation-delay: 0.2s;
        }

        .delay-300 {
          animation-delay: 0.3s;
        }

        [class*="delay-"] {
          opacity: 0;
        }
      </style>
    </head>

    <body class="bg-black text-white overflow-x-hidden">
      <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 bg-grid opacity-20"></div>
        <div class="glow-orb w-96 h-96 bg-white top-0 -left-48 opacity-5"></div>
        <div class="glow-orb w-80 h-80 bg-gray-800 top-1/3 right-0 opacity-10"></div>
        <div class="glow-orb w-72 h-72 bg-gray-900 bottom-0 left-1/4 opacity-10"></div>
      </div>

      @slot('content')
      <div class="min-h-screen flex items-center justify-center">
        <div class="text-center">
          <h1 class="text-4xl">Welcome to Luxid Framework</h1>
          <p class="mt-4">Your content goes here</p>
        </div>
      </div>
      @endslot

      <script src="/nova.js"></script>
    </body>

    </html>
<?php
  });
});
