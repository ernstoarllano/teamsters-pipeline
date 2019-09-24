@extends('app')

@section('content')
    <div class="p-8">
        <form class="px-8 pt-6 pb-8 mb-4 bg-white shadow-md rounded" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label class="block mb-2" for="email">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="password">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <input class="pl-10 pr-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
            </div>

            <div class="mb-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a class="inline-block text-sm font-bold text-blue-500 align-baseline hover:text-blue-800" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
@endsection
