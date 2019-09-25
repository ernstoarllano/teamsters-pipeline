@extends('layouts.app')

@section('content')
    <div class="px-8">
        <h4 class="text-3xl">{{ $job->contractor }}</h4>
        <span class="mb-4">{{ $count }} Results</span>
        <div class="py-8">
            <div>
                <div class="flex flex-row items-center justify-between">
                    <div class="w-48 pr-3">
                        <span class="font-semibold">Name</span>
                    </div>
                    <div class="w-48 px-3">
                        <span class="font-semibold">State</span>
                    </div>
                    <div class="w-16 px-3">
                        <span class="font-semibold">Email</span>
                    </div>
                    <div class="w-20 px-3">
                        <span class="font-semibold">Phone</span>
                    </div>
                    <div class="w-32 px-3">
                        <span class="font-semibold">Local Union</span>
                    </div>
                    <div class="w-32 px-3">
                        <span class="font-semibold">CDL Class</span>
                    </div>
                    <div class="w-32 px-3">
                        <span class="font-semibold">Work Status</span>
                    </div>
                    <div class="flex-1 px-3">
                        <span class="font-semibold">Last Called</span>
                    </div>
                </div>
                @foreach( $members as $member )
                    <div class="flex flex-row items-center justify-between py-5 border-b-2 border-solid border-gray-400 last:border-b-0">
                        <div class="w-48 pr-3">
                            <span>{{ $member->name }}</span>
                        </div>
                        <div class="w-48 px-3">
                            <span>{{ $member->state }}</span>
                        </div>
                        <div class="w-16 px-3">
                            <a class="inline-flex" href="mailto:{{ $member->email }}" aria-labeledby="email">
                                <span id="email" hidden>Email</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="square" stroke-linejoin="arcs"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </a>
                        </div>
                        <div class="w-20 px-3">
                            <a class="inline-flex" href="tel:{{ preg_replace('/[^0-9]/', '', $member->phone) }}" aria-labeledby="phone">
                                <span id="phone" hidden>Phone</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="square" stroke-linejoin="arcs"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12" y2="18"></line></svg>
                            </a>
                        </div>
                        <div class="w-32 px-3">
                            @if( ! empty($member->local_union) )
                                <span>{{ $member->local_union }}</span>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7f9cf5" stroke-width="2" stroke-linecap="square" stroke-linejoin="arcs"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                            @endif
                        </div>
                        <div class="w-32 px-3">
                            @if( ! empty($member->driver_class) )
                                <span>{{ $member->driver_class }}</span>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7f9cf5" stroke-width="2" stroke-linecap="square" stroke-linejoin="arcs"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                            @endif
                        </div>
                        <div class="w-32 px-3">
                            @if( $member->available === 1 )
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#68d391" stroke-width="2" stroke-linecap="square" stroke-linejoin="arcs"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fc8181" stroke-width="2" stroke-linecap="square" stroke-linejoin="arcs"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>
                            @endif
                        </div>
                        <div class="flex-1 px-3">
                            <span>{{ \Carbon\Carbon::parse($member->last_called)->format('m/d/Y') }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
