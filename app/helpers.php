<?php

function e(?string $value): string
{
    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES,
        'UTF-8'
    );
}

function url(string $path = ''): string
{
    return BASE_URL . '/' . ltrim($path, '/');
}

function asset(string $path): string
{
    $file = __DIR__ . '/../public/' . ltrim($path, '/');

    $version = is_file($file)
        ? filemtime($file)
        : time();

    return BASE_URL . '/' . ltrim($path, '/') . '?v=' . $version;
}

function format_cpf(?string $cpf): string
{
    $cpf = preg_replace('/\D/', '', (string) $cpf);

    if (strlen($cpf) !== 11) {
        return $cpf;
    }

    return substr($cpf, 0, 3)
        . '.' . substr($cpf, 3, 3)
        . '.' . substr($cpf, 6, 3)
        . '-' . substr($cpf, 9, 2);
}

function format_date(?string $date): string
{
    if (!$date) {
        return '';
    }

    $timestamp = strtotime($date);

    if ($timestamp === false) {
        return '';
    }

    return date('d/m/Y', $timestamp);
}