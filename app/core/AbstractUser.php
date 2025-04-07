<?php
namespace App\Core;

abstract class AbstractUser {
    protected string $username;
    protected string $password;

    public function __construct(string $username, string $password) {
        $this->username = $username;
        $this->password = $password;
    }

    abstract public function getRole(): string;
}
