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

        <div class="mb-3">
            <a href="{{ route('conferences.index') }}" class="btn btn-secondary btn-sm">
                &larr; {{ __('messages.conferences_list') }}
            </a>
        </div>


        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h4 class="mb-0">{{ __('messages.conference_details') }}</h4>
            </div>

            <div class="card-body">

                <div class="mb-4">
                    <h5 class="text-muted">{{ __('messages.conference_title') }}</h5>
                    <h2>{{ $conference->title }}</h2>
                </div>

                <div class="mb-4">
                    <h5 class="text-muted">{{ __('messages.conference_description') }}</h5>

                    <p class="lead">{!! nl2br(e($conference->description)) !!}</p>
                </div>

                <div class="mb-4">
                    <h5 class="text-muted">{{ __('messages.conference_date') }}</h5>
                    <p class="fs-5">

                        {{ $conference->date->format('Y-m-d') }}
                        <span class="text-muted small">
                            ({{ $conference->date->diffForHumans() }})
                        </span>
                    </p>
                </div>

                <div class="mb-4">
                    <h5 class="text-muted">{{ __('messages.conference_address') }}</h5>
                    <p class="fs-5">{{ $conference->address }}</p>
                </div>

                @auth
                    <div class="d-flex gap-2">

                        <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-warning text-white">
                            {{ __('messages.edit') }}
                        </a>

                        <form action="{{ route('conferences.destroy', $conference) }}"
                              method="POST"
                              onsubmit="return confirm('{{ __('messages.confirm_delete') }}')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
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
