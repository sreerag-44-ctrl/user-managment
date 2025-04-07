<?php
namespace App\Models;

use App\Core\AbstractUser;

class Admin extends AbstractUser {
    public function getRole(): string {
        return 'admin';
    }
}
