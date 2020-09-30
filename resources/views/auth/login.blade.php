<x-guest-layout>
 <x-jet-authentication-card>
  <x-slot name="logo">
   <x-jet-authentication-card-logo />
  </x-slot>

  <x-jet-validation-errors class="mb-4" />

  @if (session('status'))
   <div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
   </div>
  @endif

  <form method="POST" action="{{ route('login') }}">
   @csrf

   <div class="form-group">
    <x-jet-label value="Email" />
    <x-jet-input class="form-control" type="email" name="email" :value="old('email')" required autofocus />
   </div>

   <div class="form-group">
    <x-jet-label value="Password" />
    <x-jet-input class="form-control" type="password" name="password" required autocomplete="current-password" />
   </div>

   <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="remember" name="remember">
    <label class="custom-control-label" for="remember">{{ __('Remember me') }}</label>
   </div>

   <div class="d-flex align-items-center justify-content-between">
    @if (Route::has('password.request'))
     <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" tabindex="-1">
      {{ __('Forgot your password?') }}
     </a>
    @endif
    <x-jet-button>
     {{ __('Login') }}
    </x-jet-button>
   </div>
  </form>
 </x-jet-authentication-card>
</x-guest-layout>
