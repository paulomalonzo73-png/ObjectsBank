<?php
declare(strict_types=1);

class Customer
{
    public string $forename;
    public string $surname;
    public string $email;
    public array $accounts;

    public function __construct(string $forename, string $surname, string $email, array $accounts)
    {
        $this->forename = $forename;
        $this->surname = $surname;
        $this->email = $email;
        $this->accounts = $accounts;
    }

    public function getFullName(): string
    {
        return $this->forename . ' ' . $this->surname;
    }
}
