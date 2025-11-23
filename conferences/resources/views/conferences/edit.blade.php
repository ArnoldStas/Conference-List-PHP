{{--
    Edit Conference Page
    Form for editing an existing conference
    Only accessible to authenticated users (protected by middleware)
--}}

@extends('layouts.app')

@section('title', __('messages.edit_conference'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow-sm">
            <div class="card-header text-white" style="background-color: #ff6600;">
                <h4 class="mb-0">{{ __('messages.edit_conference') }}</h4>
            </div>

            <div class="card-body p-4">
                
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
