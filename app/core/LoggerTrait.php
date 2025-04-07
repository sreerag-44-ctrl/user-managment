<?php
namespace App\Core;

trait LoggerTrait {
    public function log(string $message): void {
        echo "[LOG]: " . $message . "<br>";
    }
}
