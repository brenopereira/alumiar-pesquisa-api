<?php

namespace Alumiar\Units\Auth\Routes;

use Alumiar\Support\Http\Routing\RouteFile;

class Web extends RouteFile {
    public function routes()
    {
        $this->authenticationRoutes();
    }

    public function authenticationRoutes()
    {
        $this->router->get('/login', ['as' => 'auth.login.index', 'uses' => function(){
            return "Olá mundo";
        }]);
    }
}