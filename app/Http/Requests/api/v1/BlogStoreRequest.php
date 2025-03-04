<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class BlogStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */


    //Purpose of php artisan make:request
    // Validation: It allows you to encapsulate all your request validation logic into a single class, which keeps your controller methods cleaner and easier to maintain.

    // Authorization: You can authorize whether a user is allowed to perform a particular action based on their credentials, role, or other conditions.

    // Custom Handling: You can customize the behavior of the request before it reaches your controller, for instance, modifying the request data (e.g., adding fields, sanitizing inputs) or applying specific logic before validating.
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:255', 'string'],
            'description' => ['required', 'string'],
            // 'image' => ['required', 'image'],
            'author_id' => ['required', 'integer']
        ];
    }
}
