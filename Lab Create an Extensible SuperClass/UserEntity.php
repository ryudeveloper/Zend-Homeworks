<?php

class UserEntity
{
    protected string $firstName;
    protected string $lastName;
    protected string $role;

    // Magic constructor
    public function __construct(string $firstName, string $lastName, string $role)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->role = $role;
    }

    // Magic __toString method
    public function __toString(): string
    {
        return $this->getFullName() . ' (' . $this->role . ')';
    }

    // Magic __get method
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

    // Magic __set method
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getPermissions(): array
    {
        return ['read'];
    }
}