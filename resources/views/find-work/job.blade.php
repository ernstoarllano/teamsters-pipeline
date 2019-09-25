@extends('layouts.app')

@section('content')
    <div class="px-8">
        <h1 class="text-6xl">{{ $job->contractor }}</h1>
        <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="flex flex-row flex-no-wrap items-center mb-5">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/">Home</a>
                <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="ml-4">
                <a itemprop="item" href="/find-work">Find Work</a>
                <meta itemprop="position" content="2" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="ml-4">
                <a itemprop="item" href="/find-work/{{ $state }}">{{ ucfirst($state) }}</a>
                <meta itemprop="position" content="3" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="ml-4">
                <span itemprop="name">{{ $job->contractor }}</span>
                <meta itemprop="position" content="4" />
            </li>
        </ol>
        @if( ! empty($job->local_union) )
            <div class="mb-4">
                <span class="block font-semibold">Local Union</span>
                <span>{{ $job->local_union }}</span>
            </div>
        @endif
        @if( ! empty($job->job_notification_date) )
            <div class="mb-4">
                <span class="block font-semibold">Job Notification Date</span>
                <span>{{ \Carbon\Carbon::parse($job['job_notification_date'])->format('m/d/Y') }}</span>
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
        @if( ! empty($job->start_date) )
            <div class="mb-4">
                <span class="block font-semibold">Start Date</span>
                <span>{{ \Carbon\Carbon::parse($job['start_date'])->format('m/d/Y') }}</span>
            </div>
        @endif
    </div>
@endsection
