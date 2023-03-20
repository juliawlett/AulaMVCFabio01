<?php
//utilizamos a notação namespace em todas as classe que vamos criar daqui para frente, dessa forma o autoload do composer conseguirá identificar
// o local da classe e a partir disso podemos importar a classe em qualquer local do nosso projeto.
    namespace App;

    //Importação da classe Bootstrap seguindo o padrão PSR-4
    use Core\init\Bootstrap;

    class Route extends Bootstrap{


        public function initRoutes(){
            $routes['home'] = array(
                'route' =>  '/',
                'controller'    =>  'IndexController',
                'action'    =>  'index'
            );

            $routes['sobre_nos'] = array(
                'route' =>  '/sobre_nos',
                'controller'    =>  'IndexController',
                'action'    =>  'sobre_nos'
            );

            $routes['contato'] = array(
                'route' =>  '/contato',
                'controller'    =>  'IndexController',
                'action'    =>  'contato'
            );

            $routes['produto'] = array(
                'route' =>  '/produto',
                'controller'    =>  'ProdutoController',
                'action'    =>  'index'
            );

            $this->setRoutes($routes);
        }
    }


?>