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
        ];
    }
}
