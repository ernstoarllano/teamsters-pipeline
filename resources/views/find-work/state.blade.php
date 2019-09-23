@extends('app')

@section('content')
    <h4 class="px-8 text-3xl">{{ ucfirst($state) }}</h4>
    <span class="mb-4 px-8">{{ $count }} Results</span>
    <div class="overflow-x-auto">
        <div class="p-8">
            <div class="grid grid-1/3 grid-gap-normal">
                @foreach( $jobs as $key => $job )
                    <div class="flex flex-col flex-wrap relative p-4 bg-white rounded-lg shadow-lg transition hover:scale" data-id="{{ $job->id }}">
                        @php
                            $start = Carbon\Carbon::now();
                            $end = Carbon\Carbon::now()->sub(7, 'days');
                        @endphp
                        @if( Carbon\Carbon::parse($job->start_date)->between($start, $end) )
                            <span class="self-start mb-3 px-2 py-1 text-xs font-semibold text-green-600 leading-none tracking-wide uppercase bg-green-200 rounded-full">New</span>
                        @endif
                        <h6 class="text-lg font-semibold leading-tight">{{ $job->contractor }}</h6>
                        <div class="flex flex-col flex-wrap flex-1">
                            <span class="block mb-3">{{ $job->company }}</span>
                            <span class="block mt-auto mb-0 text-sm text-gray-600">
                                {{ Carbon\Carbon::parse($job->start_date)->format('M d, Y') }}
                                <span class="text-xs">start date</span>
                            </span>
                            <span class="mt-1 text-sm text-gray-600">
                                ${{ number_format($job->pay, 2, '.', ',') }}
                                <span class="text-xs">per week</span>
                            </span>
                        </div>
                        <a class="absolute inset-0" href="/find-work/{{ $state }}/{{ $job->slug }}" aria-label="View {{ $job->company }} Job Post"></a>
                    </div>
                @endforeach
            </div>
            {{ $jobs->links() }}
        </div>
    </div>

    @if( ! $jobs )
        <div>Sorry, it looks like we couldn't find any jobs in {{ ucfirst($state) }}.</div>
    @endif
@endsection
