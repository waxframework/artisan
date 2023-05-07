<?php

namespace WaxFramework\Artisan\Commands;

use WaxFramework\Artisan\Commands\App\Setup;
use WaxFramework\Artisan\Commands\Make\Controller;
use WaxFramework\Artisan\Commands\Make\DTO;
use WaxFramework\Artisan\Commands\Make\Middleware;
use WaxFramework\Artisan\Commands\Make\Model;
use WaxFramework\Artisan\Commands\Make\Provider;
use WaxFramework\Artisan\Commands\Make\Repository;
use WaxFramework\Artisan\Contracts\Command;

class Commands
{
    /**
     * Register all available commands
     *
     * @return array<Command>;
     */
    public static function list() {
        return [
            Setup::class,
            Controller::class,
            DTO::class,
            Middleware::class,
            Model::class,
            Provider::class,
            Repository::class
        ];
    }
}