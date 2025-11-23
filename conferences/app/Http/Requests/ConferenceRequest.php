<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceRequest extends FormRequest
{

    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            // Title field validation
            // 'required' - field must not be empty
            // 'string' - field must be a string
            // 'max:255' - field cannot exceed 255 characters
            'title' => ['required', 'string', 'max:255'],

            // Description field validation
            // 'required' - field must not be empty
            // 'string' - field must be a string
            // No max length for text fields (can be very long)
            'description' => ['required', 'string'],

            // Date field validation
            // 'required' - field must not be empty
            // 'date' - field must be a valid date
            // 'after:today' - conference date must be in the future (after today)
            'date' => ['required', 'date', 'after:today'],

            // Address field validation
            // 'required' - field must not be empty
            // 'string' - field must be a string
            // 'max:500' - address can be longer than title but still limited
            'address' => ['required', 'string', 'max:500'],

            // Country field validation
            'country' => ['required', 'string', 'max:255'],

            // City field validation
            'city' => ['required', 'string', 'max:255'],

            // Participants count validation
            // 'integer' - must be a whole number
            // 'min:1' - must be at least 1 participant
            'participants_count' => ['required', 'integer', 'min:1'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => __('validation.required', ['attribute' => __('validation.attributes.title')]),
            'description.required' => __('validation.required', ['attribute' => __('validation.attributes.description')]),
            'date.required' => __('validation.required', ['attribute' => __('validation.attributes.date')]),
            'date.after' => __('validation.after', ['attribute' => __('validation.attributes.date'), 'date' => 'today']),
            'address.required' => __('validation.required', ['attribute' => __('validation.attributes.address')]),
            'country.required' => __('validation.required', ['attribute' => __('validation.attributes.country')]),
            'city.required' => __('validation.required', ['attribute' => __('validation.attributes.city')]),
            'participants_count.required' => __('validation.required', ['attribute' => __('validation.attributes.participants_count')]),
            'participants_count.min' => __('validation.min.numeric', ['attribute' => __('validation.attributes.participants_count'), 'min' => 1]),
        ];
    }
}
