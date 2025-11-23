{{--
    Edit Conference Page
    Form for editing an existing conference
    Only accessible to authenticated users (protected by middleware)
--}}

@extends('layouts.app')

@section('title', __('messages.edit_conference'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        {{-- Page card with form --}}
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-white">
                <h4 class="mb-0">{{ __('messages.edit_conference') }}</h4>
            </div>

            <div class="card-body">
                
                <form method="POST" action="{{ route('conferences.update', $conference) }}">
                    @csrf
                    @method('PUT')
                    @include('conferences._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
