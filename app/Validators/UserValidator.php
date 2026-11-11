<?php

namespace App\Validators;

class UserValidator
{
    /** @return array<string,string> */
    public function validate(array $input): array
    {
        $errors = [];

        // Nome
        $name = $input['name'] ?? '';

        if (!is_string($name) || trim($name) === '') {
            $errors['name'] = 'Informe o nome.';
        } elseif (mb_strlen($name) > 100) {
            $errors['name'] =
                'O nome deve ter no máximo 100 caracteres.';
        }

        // Sobrenome
        $lastName = $input['last_name'] ?? '';

        if (
            !is_string($lastName)
            || trim($lastName) === ''
        ) {
            $errors['last_name'] = 'Informe o sobrenome.';
        } elseif (mb_strlen($lastName) > 100) {
            $errors['last_name'] =
                'O sobrenome deve ter no máximo 100 caracteres.';
        }

        // E-mail
        $email = $input['email'] ?? '';

        if (
            !is_string($email)
            || mb_strlen($email) > 150
            || !filter_var($email, FILTER_VALIDATE_EMAIL)
        ) {
            $errors['email'] = 'Informe um e-mail válido.';
        }

        // CPF
        $cpf = preg_replace(
            '/\D/',
            '',
            (string) ($input['cpf'] ?? '')
        );

        if (strlen($cpf) !== 11) {
            $errors['cpf'] = 'Informe um CPF válido.';
        } elseif (!$this->validCpf($cpf)) {
            $errors['cpf'] = 'Informe um CPF válido.';
        }

        // Data de nascimento
        $birthDate = $input['birth_date'] ?? '';

        if (!$this->validBirthDate($birthDate)) {
            $errors['birth_date'] =
                'Informe uma data de nascimento válida.';
        }

        return $errors;
    }

    private function validCpf(string $cpf): bool
    {
        if (preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            $sum = 0;

            for ($i = 0; $i < $t; $i++) {
                $sum += (int) $cpf[$i]
                    * (($t + 1) - $i);
            }

            $digit = (10 * $sum) % 11;

            if ($digit === 10) {
                $digit = 0;
            }

            if ((int) $cpf[$t] !== $digit) {
                return false;
            }
        }

        return true;
    }

    private function validBirthDate(string $date): bool
    {
        if ($date === '') {
            return false;
        }

        $dateObject = \DateTime::createFromFormat(
            'Y-m-d',
            $date
        );

        if (
            !$dateObject
            || $dateObject->format('Y-m-d') !== $date
        ) {
            return false;
        }

        $today = new \DateTime('today');

        return $dateObject <= $today;
    }
}