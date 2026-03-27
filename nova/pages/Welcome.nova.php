<?php

component('pages/Welcome', function ($c) {
  $c->state(function () {
    return [
      'version' => 'v0.5.0',
      'title' => 'Build with',
      'subtitle' => 'The modern PHP framework that combines the power of <span class="text-white font-semibold">Nova Templates</span>, <span class="text-gray-300 font-semibold">L ORM</span>, and <span class="text-gray-200 font-semibold">Juice CLI</span> with the beauty of the SEA architecture.',
      'showBadge' => true,
      'ctaLinks' => [
        ['text' => 'Get Started', 'href' => 'https://luxid-dev.netlify.app/', 'primary' => true],
        ['text' => 'Documentation', 'href' => 'https://luxid-dev.netlify.app/', 'primary' => false],
      ]
    ];
  });

  $c->actions([
    'toggleBadge' => function (&$state) {
      $state['showBadge'] = !$state['showBadge'];
    }
  ]);

  $c->view(function ($state) {
?>
    <div class="relative min-h-screen flex items-center justify-center px-6 pt-20">
      <div class="max-w-6xl mx-auto text-center">

        @if($state->showBadge)
        <div class="inline-flex items-center px-4 py-2 rounded-full glass-effect mb-8 animate-fade-in-up border border-gray-700">
          <span class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse flicker"></span>
          <span class="text-sm font-medium text-gray-300">
            Luxid Framework @echo($state->version)
          </span>
        </div>
        @endif

        <h1 class="text-6xl md:text-8xl font-black mb-6 animate-fade-in-up delay-100 flicker">
          @echo($state->title)
          <br>
          <span class="gradient-text">Elegance</span>
        </h1>

        <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto mb-12 leading-relaxed animate-fade-in-up delay-200">
          @echo($state->subtitle)
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16 animate-fade-in-up delay-300">
          @foreach($state->ctaLinks as $link)
          <a href="@echo($link['href'])"
            class="@if($link['primary']) btn-primary @else btn-secondary @endif px-8 py-4 rounded-xl font-semibold hover-lift flex items-center justify-center gap-2"
            target="_blank">
            @echo($link['text'])
            @if($link['primary'])
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
            @endif
          </a>
          @endforeach
        </div>

        <button @click="toggleBadge" class="text-sm text-gray-500 hover:text-gray-300 transition mt-4">
          @if($state->showBadge) Hide @else Show @endif Badge
        </button>
      </div>
    </div>
<?php
  });
});
