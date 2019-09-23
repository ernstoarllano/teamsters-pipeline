@extends('app')

@section('content')
    <div class="p-8">
        <div>
            <div class="flex flex-row items-center justify-between">
                <div class="w-48 pr-3">
                    <span class="font-semibold">Job</span>
                </div>
                <div class="w-48 px-3">
                    <span class="font-semibold">Local Union</span>
                </div>
                <div class="w-16 px-3">
                    <span class="font-semibold"></span>
                </div>
                <div class="w-20 px-3">
                    <span class="font-semibold"></span>
                </div>
                <div class="w-32 px-3">
                    <span class="font-semibold"></span>
                </div>
                <div class="w-32 px-3">
                    <span class="font-semibold"></span>
                </div>
                <div class="w-32 px-3">
                    <span class="font-semibold"></span>
                </div>
                <div class="flex-1 px-3">
                    <span class="font-semibold"></span>
                </div>
            </div>
            @foreach( $jobs as $job )
                <div class="flex flex-row items-center justify-between py-5 border-b-2 border-solid border-gray-400 last:border-b-0">
                    <div class="w-48 pr-3">
                        <span>{{ $job->contractor }}</span>
                    </div>
                    <div class="w-48 px-3">
                        <span>{{ $job->local_union }}</span>
                    </div>
                    <div class="w-16 px-3">

                    </div>
                    <div class="w-20 px-3">

                    </div>
                    <div class="w-32 px-3">

                    </div>
                    <div class="w-32 px-3">

                    </div>
                    <div class="w-32 px-3">

                    </div>
                    <div class="flex-1 px-3">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" href="/admin/jobs/{{ $job->slug }}">View Workers</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $jobs->links() }}
    </div>
@endsection
