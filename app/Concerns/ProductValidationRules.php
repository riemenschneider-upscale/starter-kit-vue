<?php

namespace App\Concerns;

use Illuminate\Contracts\Validation\ValidationRule;

trait ProductValidationRules
{
    /**
     * @return array<string, array<int, ValidationRule|array<mixed>|string>>
     */
    protected function productRules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'decimal:0,2', 'min:0', 'max:99999999.99'],
        ];
    }
}
