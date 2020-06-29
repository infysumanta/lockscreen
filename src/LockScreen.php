<?php

namespace Sumantablog\Admin\LockScreen;

use Sumantablog\Admin\Extension;

class LockScreen extends Extension
{
    const LOCK_KEY = 'laravel-superadmin-lock';

    public $name = 'lock-screen';

    public $views = __DIR__.'/../resources/views';

    public static function link()
    {
        $url = route('laravel-superadmin-lock');

        return <<<HTML
<li>
    <a href="{$url}">
      <i class="fa fa-lock"></i>
    </a>
</li>
HTML;

    }
}