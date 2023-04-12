<?php

namespace WaxFramework\Artisan\Commands\Make;

class Middleware extends Make {
    protected static $defaultName = 'make:middleware';

    protected static $defaultDescription = 'Create a new middleware class';

    public function namespaces():array {
        return [
            explode( '\\', __NAMESPACE__ )[0],
            'App',
            'Http',
            'Middleware'
        ];
    }

    public function directories():array {
        return [
            'app',
            'Http',
            'Middleware',
        ];
    }

    public function uses_classes():array {
        return [
            'WP_REST_Request',
            'WaxFramework\Routing\Contracts\Middleware'
        ];
    }

    public function file_content() {
        return '<?php

namespace NamespaceName;

UsesClasses

class ClassName implements Middleware {
    /**
    * Handle an incoming request.
    *
    * @param  WP_REST_Request  $wp_rest_request
    * @return bool
    */
    public function handle( WP_REST_Request $wp_rest_request ): bool {
        // Write your middleware logic here
        return true;
    }
}';
    }
}