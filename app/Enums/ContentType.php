<?php

namespace App\Enums;

enum ContentType: string
{
    case FrontMatter = 'frontmatter';
    case Part = 'part';
    case Chapter = 'chapter';
    case BackMatter = 'backmatter';

    public static function labels(): array
    {
        return [
            'frontmatter' => __('Front Matter'),
            'part' => __('Part'),
            'chapter' => __('Chapter'),
            'backmatter' => __('Back Matter'),
        ];
    }
}
