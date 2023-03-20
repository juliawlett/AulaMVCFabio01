<?php

    namespace Core\init;
    //Uma classe abstrata é definida de forma analoga a qualquer tipo de classe.
    //É um tipo de classe especial que não pode ser instanciada, apenas herdada.
    //Sendo assim, uma classe abstrata nao pode ter um objeto criado a partir de uma instancia
    //As classes abstratas servem como "MODELO" para outras classes que dela herda
    //nao podendo ser instanciada por si so
    //Para ter um objeto classes abstrata é necessario criar uma classe
    //especializada herdando dela com o termo extends

    abstract class Bootstrap{
        private $routes;

        //Quando definimos um metodo abstrato, estamos indicando que quando herdado na classe filha
        //Esse metodo deve ser obrigatorio implementado la nessa classe filha
        abstract protected function initRoutes();

        //Visibilidade protected indica que o atributo ou metodo pode ser modificado pela propria classe e por classe
        // que seja filhas de dela, ou seja, herdem desta classe-
    public function __construct(){
        $this->initRoutes();
        $this->run($this->getUrl());
    }
        

    public function getRoutes(){
        return $this->routes;
    }
    public function setRoutes(array $routes){
        $this->routes = $routes;
    }

    public function getUrl(){
        //$_SERVER['REQUEST_URI'] contem o endereço digitado na URL 

        //parse_url pega a URL digitada no navegador e retorna os seus componente
        // PHP_URL_PATH faz com que o retorno seja string do path digitado na URL
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    //responsavel pela identificação do controller e chamada da action desejada
    protected function run($url){

          
        foreach ($this->getRoutes() as $key => $route){
            if ($url == $route['route']){
                $class = "App\\controllers\\". ucfirst($route['controller']);
                $controller = new $class;
                $action = $route ['action'];
                $controller->$action();


            }
        }

    }

}
?>