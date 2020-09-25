<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Parks Admin 2.0') }}</title>

  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/77700fedd3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/concept.css') }}">

  @livewireStyles

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
 </head>
 <body id="body">
  <div id="layout" class="wrapper">
   <header id="header">
    <div id="logo">
     <a href="#">
      <img src="https://parkssuperior.com/wp-content/themes/understrap-child/img/logo.png" alt="Parks Superior Logo" />
     </a>
    </div>
    <button id="mainNavToggle" class="btn btn-outline-secondary" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="fas fa-bars"></span> <span class="sr-only">Toggle navigation</span>
    </button>
   </header>
   <div id="torso" class="wrapper">
    <nav id="mainNav">
     <div class="nav">
      <x-jet-nav-link href="/dashboard" :active="request()->routeIs('dashboard')">
       Dashboard
      </x-jet-nav-link>
      <x-jet-nav-link href="{{ route('cars.index') }}" :active="request()->routeIs('cars.index')">
       Car
      </x-jet-nav-link>
     </div>
     @if (Route::has('login'))
      @auth
       <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
      @else
       <a href="{{ route('login') }}" class="btn btn-success">Login</a>
       @if (Route::has('register'))
        <a href="{{ route('register') }}" class="btn btn-light">Register</a>
       @endif
      @endif
     @endif

    </nav>
    <div id="contents">
     <nav id="globalNav">
      <div id="searcher" class="input-group">
       <div class="input-group-prepend" id="searcherToggle">
        <label class="input-group-text" for="searcher01">
        <span class="fas fa-search"></span>
        </label>
       </div>
       <input type="text" class="form-control" id="searcher01" placeholder="search.." />
       <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Submit</button>
       </div>
      </div>
      <ul class="nav">
      <x-jet-dropdown align="right" width="48">
       <x-slot name="trigger">
        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
         <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="" />
        </button>
       </x-slot>

       <x-slot name="content">
        <!-- Account Management -->
        <div class="block px-4 py-2 text-xs text-gray-400">
         Manage Account
        </div>
        
         <div class="flex items-center px-4 py-2">
          <div class="flex-shrink-0">
           <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="" />
          </div>
          <div class="ml-2">
           <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
           <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
          </div>
         </div>

        <x-jet-dropdown-link href="/user/profile">
         Profile
        </x-jet-dropdown-link>

        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
         <x-jet-dropdown-link href="/user/api-tokens">
          API Tokens
         </x-jet-dropdown-link>
        @endif

        <div class="border-t border-gray-100"></div>

        <!-- Team Management -->
        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
         <div class="block px-4 py-2 text-xs text-gray-400">
          Manage Team
         </div>

         <!-- Team Settings -->
         <x-jet-dropdown-link href="/teams/{{ Auth::user()->currentTeam->id }}">
          Team Settings
         </x-jet-dropdown-link>

         @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
          <x-jet-dropdown-link href="/teams/create">
           Create New Team
          </x-jet-dropdown-link>
         @endcan

         <div class="border-t border-gray-100"></div>

         <!-- Team Switcher -->
         <div class="block px-4 py-2 text-xs text-gray-400">
          Switch Teams
         </div>

         @foreach (Auth::user()->allTeams() as $team)
          <x-jet-switchable-team :team="$team" />
         @endforeach

         <div class="border-t border-gray-100"></div>
        @endif
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
         @csrf
         <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
          Logout
         </x-jet-dropdown-link>
        </form>
       </x-slot>
      </x-jet-dropdown>
      </ul>
     </nav>
     <main id="main">


{{--
      <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
       <!-- Primary Navigation Menu -->
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
         <div class="flex">
          <!-- Logo -->
          <div class="flex-shrink-0 flex items-center">
           <a href="/dashboard">
            <x-jet-application-mark class="block h-9 w-auto" />
           </a>
          </div>
         </div>
         <!-- Settings Dropdown -->

         <!-- Hamburger -->
         <div class="-mr-2 flex items-center sm:hidden">
          <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
           <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
           </svg>
          </button>
         </div>
        </div>
       </div>

       <!-- Responsive Navigation Menu -->
       <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
         <x-jet-responsive-nav-link href="/dashboard" :active="request()->routeIs('dashboard')">
          Dashboard
         </x-jet-responsive-nav-link>
        </div>
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
         <div class="flex items-center px-4">
          <div class="flex-shrink-0">
           <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="" />
          </div>
          <div class="ml-3">
           <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
           <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
          </div>
         </div>
         <div class="mt-3 space-y-1">
          <!-- Account Management -->
          <x-jet-responsive-nav-link href="/user/profile" :active="request()->routeIs('profile.show')">
           Profile
          </x-jet-responsive-nav-link>
          @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
           <x-jet-responsive-nav-link href="/user/api-tokens" :active="request()->routeIs('api-tokens.index')">
            API Tokens
           </x-jet-responsive-nav-link>
          @endif
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
           @csrf
           <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
            Logout
           </x-jet-responsive-nav-link>
          </form>

          <!-- Team Management -->
          @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
           <div class="border-t border-gray-200"></div>

           <div class="block px-4 py-2 text-xs text-gray-400">
            Manage Team
           </div>

           <!-- Team Settings -->
           <x-jet-responsive-nav-link href="/teams/{{ Auth::user()->currentTeam->id }}" :active="request()->routeIs('teams.show')">
            Team Settings
           </x-jet-responsive-nav-link>

           <x-jet-responsive-nav-link href="/teams/create" :active="request()->routeIs('teams.create')">
            Create New Team
           </x-jet-responsive-nav-link>

           <div class="border-t border-gray-200"></div>

           <!-- Team Switcher -->
           <div class="block px-4 py-2 text-xs text-gray-400">
            Switch Teams
           </div>

           @foreach (Auth::user()->allTeams() as $team)
            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
           @endforeach
          @endif
         </div>
        </div>
       </div>
      </nav> --}}

      <!-- Page Heading -->
      @if($header)
       <div class="flex">{{ $header ?? null }}</div>
      @endif

      <!-- Page Content -->
      {{ $slot ?? null }}
     </main>
    </div>
   </div>
  </div>

  @stack('modals')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
   $(document).ready(function(){
    $('#mainNavToggle').click(function(event) {
     $('#mainNav').toggleClass('active');
     $('#body').toggleClass('noScrolls');
    });
    $('#searcherToggle').click(function(event) {
     $('#searcher').toggleClass('active');
     $('#body').toggleClass('noScrolls');
    });
   });
  </script>
  @livewireScripts
 </body>
</html>
