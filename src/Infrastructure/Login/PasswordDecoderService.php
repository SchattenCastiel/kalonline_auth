<?php

namespace App\Infrastructure\Login;

class PasswordDecoderService
{
    public function __invoke(string $password): string
    {
        if (!ctype_print($password)) {
            $password = bin2hex($password);
        }

        $encodingMapping = array_flip(PasswordEncodingMapping::MAPPING);

        $newPassword = '';
        for ($i = 0; $i < strlen($password); $i += 2) {
            if (isset($encodingMapping[$password[$i]])) {
                $key = strtoupper($password[$i]);
            } else {
                $key = strtoupper($password[$i]) . strtoupper($password[$i + 1]);
            }
            $newPassword .= $encodingMapping[$key];
        }

        return $newPassword;
    }
}
