<?php
namespace App\Services;

use App\Core\AuthInterface;
use App\Core\LoggerTrait;
use App\Models\Admin;
use App\Models\RegularUser;

class AuthService implements AuthInterface {
    use LoggerTrait;

    private array $users = [];

    public function __construct() {
        $this->users = [
            'admin' => ['password' => 'admin123', 'role' => 'admin'],
            'user' => ['password' => 'user123', 'role' => 'user'],
        ];
    }

    public function login(string $username, string $password): bool {
        session_start();
        if (isset($this->users[$username]) && $this->users[$username]['password'] === $password) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $this->users[$username]['role'];
            $this->log("User '{$username}' logged in.");
            return true;
        }
        return false;
    }

    public function logout(): void {
        session_start();
        session_unset();
        session_destroy();
        $this->log("User logged out.");
    }
}
