@extends('app')

@section('content')
    <h4 class="mb-4 px-8 text-3xl">{{ ucfirst($state) }}</h4>
    <div class="overflow-x-auto">
        <div class="flex flex-row flex-wrap justify-between px-8">
            @foreach( $jobs as $key => $job )
                <div class="flex-shrink-0 w-64 mb-8 p-4 bg-white rounded-lg shadow-lg">
                    <h6 class="text-lg font-semibold leading-tight">
                        <a href="/find-work/{{ $state }}/{{ $job['slug'] }}">{{ $job['contractor'] }}</a>
                    </h6>
                    <div class="mt-2">
                        <span>{{ $job['company'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @if( ! $jobs )
        <div>Sorry, it looks like we couldn't find any jobs in {{ ucfirst($state) }}.</div>
    @endif
@endsection
