<?php

namespace App\Translation;

use App\Models\Translation;

class TranslationService
{
    private $lang;

    public function __construct($lang='en')
    {
        $this->lang = $lang;
    }

    public function _($group, $key)
    {
        $t = Translation::where('group', $group)
                        ->where('key', $key)
                        ->firstOrFail();
        return $t->{$this->lang};
    }
}
