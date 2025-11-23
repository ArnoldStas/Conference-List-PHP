{{--
    Create Conference Page
    Form for creating a new conference
    Only accessible to authenticated users (protected by middleware)
--}}

@extends('layouts.app')

@section('title', __('messages.create_conference'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        {{-- Page card with form --}}
        <div class="card shadow-sm">
            <div class="card-header text-white" style="background-color: #ff6600;">
                <h4 class="mb-0">{{ __('messages.create_conference') }}</h4>
            </div>

            <div class="card-body">
                
                <form method="POST" action="{{ route('conferences.store') }}">
                    @csrf
                    @include('conferences._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
