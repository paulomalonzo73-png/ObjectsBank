<?php
declare(strict_types=1);

class Account
{
    public array $number;
    public string $type;
    private float $balance;

    public function __construct(array $number, string $type, float $balance)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
