@extends('layouts.app')

@section('content')
    <div class="p-8">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <p>Welcome, {{ Auth::user()->name }}</p>
        </div>
    </div>
@endsection
