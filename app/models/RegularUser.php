<?php
namespace App\Models;

use App\Core\AbstractUser;

class RegularUser extends AbstractUser {
    public function getRole(): string {
        return 'user';
    }
}
