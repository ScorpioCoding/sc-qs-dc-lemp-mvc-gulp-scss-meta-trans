<?php

return (object) array(

  ''    => ['lang' => 'en', 'module' => 'Site', 'namespace' => 'App\Modules\Site\Controllers', 'controller' => 'home', 'action' => 'index'],
  '/'   => ['lang' => 'en', 'module' => 'Site', 'namespace' => 'App\Modules\Site\Controllers', 'controller' => 'home', 'action' => 'index'],

  '/{lang}/home'   => ['module' => 'Site', 'namespace' => 'App\Modules\Site\Controllers', 'controller' => 'home', 'action' => 'index'],
  '/{lang}/about'   => ['module' => 'Site', 'namespace' => 'App\Modules\Site\Controllers', 'controller' => 'about', 'action' => 'index'],
  '/{lang}/services'   => ['module' => 'Site', 'namespace' => 'App\Modules\Site\Controllers', 'controller' => 'services', 'action' => 'index'],
  '/{lang}/products'   => ['module' => 'Site', 'namespace' => 'App\Modules\Site\Controllers', 'controller' => 'products', 'action' => 'index'],
  '/{lang}/sales'   => ['module' => 'Site', 'namespace' => 'App\Modules\Site\Controllers', 'controller' => 'sales', 'action' => 'index'],
  '/{lang}/contact'   => ['module' => 'Site', 'namespace' => 'App\Modules\Site\Controllers', 'controller' => 'contact', 'action' => 'index'],

);