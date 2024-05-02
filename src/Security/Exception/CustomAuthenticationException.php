<?php

namespace App\Security\Exception;

use Symfony\Component\Security\Core\Exception\AuthenticationException;

class CustomAuthenticationException extends AuthenticationException
{
    protected $message = "Email ou mot de passe incorrect";
}