@extends('app')

@section('content')
    <h4 class="mb-4 px-8 text-3xl">{{ ucfirst($state) }}</h4>
    <div class="overflow-x-auto">
        <div class="grid grid-1/3 grid-gap-normal px-8 pb-8">
            @foreach( $jobs as $key => $job )
                <div class="flex flex-col flex-wrap relative p-4 bg-white rounded-lg shadow-lg hover:scale">
                    <span class="self-start mb-3 px-2 py-1 text-xs font-semibold text-teal-600 leading-none tracking-wide uppercase bg-teal-200 rounded-full">New</span>
                    <h6 class="text-lg font-semibold leading-tight">{{ $job['contractor'] }}</h6>
                    <div class="flex flex-col flex-wrap flex-1 mt-2">
                        <span class="block mb-3">{{ $job['company'] }}</span>
                        <span class="block mt-auto mb-0">{{ \Carbon\Carbon::parse($job['start_date'])->format('m/d/Y') }}</span>
                        </div>
                    <a class="absolute inset-0" href="/find-work/{{ $state }}/{{ $job['slug'] }}" aria-label="View {{ $job['company'] }} Job Post"></a>
                </div>
            @endforeach
        </div>
    </div>

    @if( ! $jobs )
        <div>Sorry, it looks like we couldn't find any jobs in {{ ucfirst($state) }}.</div>
    @endif
@endsection
