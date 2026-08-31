<?php

namespace App\Enums;

enum ContributorRole: string
{
    case Administrator = 'administrator';
    case Author = 'author';
    case Editor = 'editor';
    case Translator = 'translator';

    public static function labels(): array
    {
        return [
            'administrator' => __('Administrator'),
            'author' => __('Author'),
            'editor' => __('Editor'),
            'translator' => __('Translator'),
        ];
    }
}
