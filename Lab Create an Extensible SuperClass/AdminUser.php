<?php
require_once 'UserEntity.php';
class AdminUser extends UserEntity
{
    public const ROLE = 'Admin';

    public function __construct(string $firstName, string $lastName)
    {
        parent::__construct($firstName, $lastName, self::ROLE);
    }

    public function getPermissions(): array
    {
        return ['read', 'write', 'delete', 'admin'];
    }
}
