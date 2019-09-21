@extends('app')

@section('content')
    <div class="px-8">
        <h1 class="text-6xl">{{ $job->contractor }}</h1>
        @if( ! empty($job->local_union) )
            <div class="mb-4">
                <span class="block font-semibold">Local Union</span>
                <span>
                    @php
                        $unions = json_decode($job['local_union'], true);
                    @endphp
                    {{ implode(', ', $unions['union']) }}
                </span>
            </div>
        @endif
        @if( ! empty($job->contractor) )
            <div class="mb-4">
                <span class="block font-semibold">Contractor</span>
                <span>{{ $job->contractor }}</span>
            </div>
        @endif
        @if( ! empty($job->company) )
            <div class="mb-4">
                <span class="block font-semibold">Company</span>
                <span>{{ $job->company }}</span>
            </div>
        @endif
        @if( ! empty($state) )
            <div class="mb-4">
                <span class="block font-semibold">State</span>
                <span>{{ ucfirst($state) }}</span>
            </div>
        @endif
        @if( ! empty($job->work_description) )
            <div class="mb-4">
                <span class="block font-semibold">Work</span>
                <span>{{ $job->work_description }}</span>
            </div>
        @endif
        @if( ! empty($job->superintendent) )
            <div class="mb-4">
                <span class="block font-semibold">Superintendent</span>
                <span>{{ $job->superintendent }}</span>
            </div>
        @endif
    </div>
@endsection
