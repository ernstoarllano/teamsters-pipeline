@extends('layouts.app')

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
                        <div class="flex flex-row flex-no-wrap items-center justify-between">
                            @if( Carbon\Carbon::parse($job->start_date)->between($start, $end) )
                                <span class="self-start mb-3 px-2 py-1 text-xs font-semibold text-green-600 leading-none tracking-wide uppercase bg-green-200 rounded-full">New</span>
                            @endif
                            <a class="ml-auto mr-0" href="#" aria-labeledby="save">
                                <span id="save" hidden>Save Job</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fc8181" stroke-width="2" stroke-linecap="square" stroke-linejoin="arcs"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            </a>
                        </div>
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
