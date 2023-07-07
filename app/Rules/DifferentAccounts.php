<?php declare(strict_types=1);

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DifferentAccounts implements Rule
{
    private $transferTo;

    public function __construct($transferTo)
    {
        $this->transferTo = $transferTo;
    }

    public function passes($attribute, $value): bool
    {
        return $this->transferTo !== $value;
    }

    public function message(): string
    {
        return 'You can`t make transaction to the same account!';
    }
}
