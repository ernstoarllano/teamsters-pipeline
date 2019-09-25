@extends('layouts.app')

@section('content')
    <div class="p-8">
        <form class="px-8 pt-6 pb-8 mb-4 bg-white shadow-md rounded" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label class="block mb-2" for="name">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="email">{{ __('Email') }}</label>
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
                    <input id="password" type="password" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300" name="password" required autocomplete="new-password">
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="password-confirm">{{ __('Confirm Password') }}</label>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="username">{{ __('Username') }}</label>
                <div class="col-md-6">
                    <input id="username" type="text" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="street">{{ __('Street') }}</label>
                <div class="col-md-6">
                    <input id="street" type="text" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" required autocomplete="street" autofocus>
                    @error('street')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="city">{{ __('City') }}</label>
                <div class="col-md-6">
                    <input id="city" type="text" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="state">{{ __('State') }}</label>
                <div class="col-md-6">
                    <input id="state" type="text" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state" autofocus>
                    @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="postcode">{{ __('Postcode') }}</label>
                <div class="col-md-6">
                    <input id="postcode" type="number" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('postcode') is-invalid @enderror" name="postcode" value="{{ old('postcode') }}" required autocomplete="postcode" autofocus>
                    @error('postcode')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="phone">{{ __('Phone') }}</label>
                <div class="col-md-6">
                    <input id="phone" type="tel" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="available">{{ __('Work Status') }}</label>
                <div class="col-md-6">
                    <input id="available" type="text" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('available') is-invalid @enderror" name="available" value="{{ old('available') }}" required autocomplete="available" autofocus>
                    @error('available')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="alerts">{{ __('Alerts') }}</label>
                <div class="col-md-6">
                    <input id="alerts" type="text" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('alerts') is-invalid @enderror" name="alerts" value="{{ old('alerts') }}" required autocomplete="alerts" autofocus>
                    @error('alerts')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="previous-job-state">{{ __('Previous State Employment') }}</label>
                <div class="col-md-6">
                    <input id="previous-job-state" type="text" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('previous_job_state') is-invalid @enderror" name="previous_job_state" value="{{ old('previous_job_state') }}" required autocomplete="previous_job_state" autofocus>
                    @error('previous_job_state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="previous-contractor">{{ __('Previous Contractor') }}</label>
                <div class="col-md-6">
                    <input id="previous-contractor" type="text" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('previous_contractor') is-invalid @enderror" name="previous_contractor" value="{{ old('previous_contractor') }}" required autocomplete="previous_contractor" autofocus>
                    @error('previous_contractor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="job-id">{{ __('Current Job') }}</label>
                <div class="col-md-6">
                    <input id="job-id" type="text" class="block w-full px-4 py-2 text-gray-900 rounded-lg border border-transparent bg-gray-100 border-gray-300 @error('job_id') is-invalid @enderror" name="job_id" value="{{ old('job_id') }}" required autocomplete="job_id" autofocus>
                    @error('job_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">{{ __('Register') }}</button>
            </div>
        </form>
    </div>
@endsection
