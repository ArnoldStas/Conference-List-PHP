{{--
    Conference Details Page
    Shows full information about a single conference
    Accessible to everyone (guests and authenticated users)
--}}

@extends('layouts.app')

@section('title', $conference->title)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="mb-4">
            <a href="{{ route('conferences.index') }}" class="btn btn-secondary">
                {{ __('messages.conferences_list') }}
            </a>
        </div>


        <div class="card shadow-sm">
            <div class="card-header text-white" style="background-color: #ff6600;">
                <h4 class="mb-0">{{ __('messages.conference_details') }}</h4>
            </div>

            <div class="card-body">

                <div class="mb-5">
                    <h5 class="text-muted mb-3">{{ __('messages.conference_title') }}</h5>
                    <h2 class="fw-bold">{{ $conference->title }}</h2>
                </div>

                <div class="mb-5">
                    <h5 class="text-muted mb-3">{{ __('messages.conference_description') }}</h5>
                    <p class="lead fs-4">{!! nl2br(e($conference->description)) !!}</p>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <h5 class="text-muted mb-3">{{ __('messages.conference_date') }}</h5>
                        <p class="fs-4 mb-1">{{ $conference->date->format('Y-m-d') }}</p>
                        <p class="text-muted">{{ $conference->date->diffForHumans() }}</p>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h5 class="text-muted mb-3">{{ __('messages.participants_count') }}</h5>
                        <p class="fs-4">{{ $conference->participants_count }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <h5 class="text-muted mb-3">{{ __('messages.country') }}</h5>
                        <p class="fs-4">{{ $conference->country }}</p>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h5 class="text-muted mb-3">{{ __('messages.city') }}</h5>
                        <p class="fs-4">{{ $conference->city }}</p>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="text-muted mb-3">{{ __('messages.conference_address') }}</h5>
                    <p class="fs-4">{{ $conference->address }}</p>
                </div>

                @auth
                    <div class="d-flex gap-3 mt-4">
                        <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-orange btn-lg">
                            {{ __('messages.edit') }}
                        </a>

                        <form action="{{ route('conferences.destroy', $conference) }}"
                              method="POST"
                              onsubmit="return confirm('{{ __('messages.confirm_delete') }}')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-lg">
                                {{ __('messages.delete') }}
                            </button>
                        </form>
                    </div>
                @endauth
            </div>

            <div class="card-footer text-muted small">

                <div class="d-flex justify-content-between">
                    <span>
                        Created: {{ $conference->created_at->format('Y-m-d H:i') }}
                    </span>
                    <span>
                        Updated: {{ $conference->updated_at->format('Y-m-d H:i') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
