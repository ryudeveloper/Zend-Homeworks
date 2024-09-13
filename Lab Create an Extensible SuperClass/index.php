<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$guest = new GuestUser('Doug', 'Bierer');
echo $guest . PHP_EOL;
echo 'Before setting new first name: ' . $guest->firstName . PHP_EOL;
$guest->firstName = 'Miquéias';
echo 'After setting new first name: ' . $guest->firstName . PHP_EOL;
echo 'Guest permissions: ' . implode(', ', $guest->getPermissions()) . PHP_EOL;

$admin = new AdminUser('Miquéias', 'Silva');
echo $admin . PHP_EOL;
echo 'Before setting new role: ' . $admin->role . PHP_EOL;
$admin->role = 'SuperAdmin';
echo 'After setting new role: ' . $admin->role . PHP_EOL;
echo 'Admin permissions: ' . implode(', ', $admin->getPermissions()) . PHP_EOL;