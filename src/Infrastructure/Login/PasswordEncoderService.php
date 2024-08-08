<?php

namespace App\Infrastructure\Login;

use App\Infrastructure\Login\Exception\PasswordEncryptionFailedException;

class PasswordEncoderService
{
    /**
     * @throws PasswordEncryptionFailedException
     */
    public function __invoke(string $password): string
    {
        $newPassword = '';
        for ($i = 0; $i < strlen($password); ++$i) {
            $newPassword .= PasswordEncodingMapping::MAPPING[$password[$i]] ?? throw new PasswordEncryptionFailedException();
        }

        $newPassword = hex2bin($newPassword);

        if (!$newPassword) {
            throw new PasswordEncryptionFailedException();
        }

        return $newPassword;
    }
}
