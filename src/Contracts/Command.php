<?php

namespace WaxFramework\Artisan\Contracts;

use Symfony\Component\Console\Command\Command as ConsoleCommand;
use WaxFramework\Artisan\Artisan;

abstract class Command extends ConsoleCommand {
    public Artisan $artisan;

    public function set_artisan( Artisan $artisan ) {
        $this->artisan = $artisan;
    }
}