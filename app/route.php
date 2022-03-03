<?php

namespace app;

class route {

    public function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    /*
    public function initRoutes() {
        $routes['home'] = array(
            'route' => '/'
        )
        $routes['sobre']
    }

    */

}

?>
