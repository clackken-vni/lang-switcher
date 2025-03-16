<?php

namespace Vnideas\LangSwitcher\Commands;

use Illuminate\Console\Command;

class LangSwitcherCommand extends Command
{
    public $signature = 'lang-switcher';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
