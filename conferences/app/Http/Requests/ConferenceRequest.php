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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'date' => ['required', 'date', 'after:today'],
            'address' => ['required', 'string', 'max:500'],
            'country' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
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
