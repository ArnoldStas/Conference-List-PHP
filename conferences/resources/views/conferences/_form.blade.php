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
        value="{{ old('date', isset($conference) && $conference->date ? $conference->date->format('Y-m-d') : '') }}"
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

<div class="mb-3">
    <label for="country" class="form-label">
        {{ __('messages.country') }} <span class="text-danger">*</span>
    </label>
    <input
        type="text"
        class="form-control @error('country') is-invalid @enderror"
        id="country"
        name="country"
        value="{{ old('country', $conference->country ?? '') }}"
        required
        placeholder="{{ __('messages.enter_country') }}"
    >

    @error('country')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label for="city" class="form-label">
        {{ __('messages.city') }} <span class="text-danger">*</span>
    </label>
    <input
        type="text"
        class="form-control @error('city') is-invalid @enderror"
        id="city"
        name="city"
        value="{{ old('city', $conference->city ?? '') }}"
        required
        placeholder="{{ __('messages.enter_city') }}"
    >

    @error('city')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label for="participants_count" class="form-label">
        {{ __('messages.participants_count') }} <span class="text-danger">*</span>
    </label>
    <input
        type="number"
        class="form-control @error('participants_count') is-invalid @enderror"
        id="participants_count"
        name="participants_count"
        value="{{ old('participants_count', $conference->participants_count ?? '') }}"
        required
        min="1"
        placeholder="{{ __('messages.enter_participants_count') }}"
    >

    @error('participants_count')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="d-flex gap-3 mt-4">
    <button type="submit" class="btn btn-orange btn-lg">
        {{ __('messages.save') }}
    </button>

    <a href="{{ route('conferences.index') }}" class="btn btn-secondary btn-lg">
        {{ __('messages.cancel') }}
    </a>
</div>
