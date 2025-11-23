{{--
    Conferences List Page
    Displays all conferences in a table format
    - Guests can only view the list
    - Authenticated users can create, edit, and delete conferences
--}}

@extends('layouts.app')

@section('title', __('messages.conferences_list'))

@section('content')
<div class="row">
    <div class="col-12">

        <div class="d-flex justify-content-between align-items-center mb-5">
            <h1>{{ __('messages.conferences_list') }}</h1>

            @auth
                <a href="{{ route('conferences.create') }}" class="btn btn-orange btn-lg">
                    <i class="bi bi-plus-circle me-2"></i>
                    {{ __('messages.add_conference') }}
                </a>
            @endauth
        </div>

        @forelse($conferences as $conference)

            <div class="card conference-card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">

                            <h5 class="card-title">{{ $conference->title }}</h5>

                            <p class="card-text text-muted">
                                {{ Str::limit($conference->description, 200) }}
                            </p>


                            <div class="text-muted small">
                                <span class="me-3">
                                    <strong>{{ __('messages.conference_date') }}:</strong>
                                    {{ $conference->date->format('Y-m-d') }}
                                </span>
                                <span class="me-3">
                                    <strong>{{ __('messages.city') }}:</strong>
                                    {{ $conference->city }}
                                </span>
                                <span class="me-3">
                                    <strong>{{ __('messages.country') }}:</strong>
                                    {{ $conference->country }}
                                </span>
                                <span>
                                    <strong>{{ __('messages.participants_count') }}:</strong>
                                    {{ $conference->participants_count }}
                                </span>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex align-items-center justify-content-end">
                            <div class="d-flex gap-2" role="group">
                                <a href="{{ route('conferences.show', $conference) }}"
                                   class="btn btn-info text-white">
                                    <i class="bi bi-eye me-1"></i>
                                    {{ __('messages.view') }}
                                </a>

                                @auth
                                    <a href="{{ route('conferences.edit', $conference) }}"
                                       class="btn btn-orange text-white">
                                        <i class="bi bi-pencil me-1"></i>
                                        {{ __('messages.edit') }}
                                    </a>

                                    <form action="{{ route('conferences.destroy', $conference) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('{{ __('messages.confirm_delete') }}')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash me-1"></i>
                                            {{ __('messages.delete') }}
                                        </button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            
            <div class="alert alert-info">
                {{ __('messages.no_conferences') }}
            </div>
        @endforelse
    </div>
</div>
@endsection
