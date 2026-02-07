<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ForbiddenWords implements ValidationRule
{
    protected array $forbidden = [
        'pago',
        'pagos',
        'gratificación',
        'gratificacion',
        'premio',
        'dinero',
        'recompensa',
        'depósito',
        'deposito',
    ];

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $text = mb_strtolower($value);
        foreach ($this->forbidden as $word) {
            if (str_contains($text, mb_strtolower($word))) {
                $fail("El campo :attribute no puede contener la palabra '$word'.");
                return;
            }
        }
    }
}
