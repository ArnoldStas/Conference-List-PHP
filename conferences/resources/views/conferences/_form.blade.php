<div class="mb-3">
    <label for="title" class="form-label">
        {{ __('messages.conference_title') }} <span class="text-danger">*</span>
    </label>

    <input
        type="text"
        class="form-control @error('title') is-invalid @enderror"
        id="title"
        name="title"
        value="{{ old('title', $conference->title ?? '') }}"
        required
        placeholder="{{ __('messages.enter_title') }}"
    >

    @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">
        {{ __('messages.conference_description') }} <span class="text-danger">*</span>
    </label>

    <textarea
        class="form-control @error('description') is-invalid @enderror"
        id="description"
        name="description"
        rows="5"
        required
        placeholder="{{ __('messages.enter_description') }}"
    >{{ old('description', $conference->description ?? '') }}</textarea>

    @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label for="date" class="form-label">
        {{ __('messages.conference_date') }} <span class="text-danger">*</span>
    </label>

    <input
        type="date"
        class="form-control @error('date') is-invalid @enderror"
        id="date"
        name="date"
        value="{{ old('date', ($conference ?? null)?->date?->format('Y-m-d') ?? '') }}"
        required
    >

    @error('date')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">
        {{ __('messages.conference_address') }} <span class="text-danger">*</span>
    </label>
    <input
        type="text"
        class="form-control @error('address') is-invalid @enderror"
        id="address"
        name="address"
        value="{{ old('address', $conference->address ?? '') }}"
        required
        placeholder="{{ __('messages.enter_address') }}"
    >

    @error('address')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="d-flex gap-2">

    <button type="submit" class="btn btn-primary">
        {{ __('messages.save') }}
    </button>


    <a href="{{ route('conferences.index') }}" class="btn btn-secondary">
        {{ __('messages.cancel') }}
    </a>
</div>
