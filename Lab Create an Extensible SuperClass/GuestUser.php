<?php
require_once 'UserEntity.php';
class GuestUser extends UserEntity
{
    public const ROLE = 'Guest';

    public function __construct(string $firstName, string $lastName)
    {
        parent::__construct($firstName, $lastName, self::ROLE);
    }

    public function getPermissions(): array
    {
        return ['read', 'comment'];
    }
}