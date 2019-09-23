@extends('app')

@section('content')
    <h4 class="px-8 text-3xl">Current Members</h4>
    <span class="mb-4 px-8">{{ $count }} Results</span>
    <div class="p-8">
        <div>
            <div class="flex flex-row items-center justify-between">
                <div class="flex-1">Name</div>
                <div class="flex-1 px-3">State</div>
                <div class="px-3">Email</div>
                <div class="px-3">Phone</div>
                <div class="flex-1 px-3">Local Union</div>
                <div class="flex-1 px-3">CDL Class</div>
                <div class="flex-1 px-3">Work Status</div>
                <div class="flex-1 px-3">Last Called</div>
            </div>
            @foreach( $members as $member )
                <div class="flex flex-row items-center justify-between py-5">
                    <div class="flex-1">{{ $member->name }}</div>
                    <div class="flex-1 px-3">{{ $member->state }}</div>
                    <div class="px-3">
                        <a href="mailto:{{ $member->email }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="square" stroke-linejoin="arcs"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </a>
                    </div>
                    <div class="px-3">
                        <a href="tel:{{ $member->phone }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="square" stroke-linejoin="arcs"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12" y2="18"></line></svg>
                        </a>
                    </div>
                    <div class="flex-1 px-3"></div>
                    <div class="flex-1 px-3">{{ $member->driver_class }}</div>
                    <div class="flex-1 px-3">{{ $member->available === 1 ? 'Available' : 'Not Available' }}</div>
                    <div class="flex-1 px-3">{{ \Carbon\Carbon::parse($member->last_called)->format('m/d/Y') }}</div>
                </div>
            @endforeach
        </div>
        {{ $members->links() }}
    </div>
@endsection
