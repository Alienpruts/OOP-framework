<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 14:02
 */

/**
 * App Core Class
 *  Creates URL (/controller/method/params) & loads core controller
 * Class Core
 */
class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    /**
     * Core constructor.
     */
    public function __construct()
    {
        $url = $this->getUrl();

        // Check for controller (first part of url)
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        // Require the controller
        require_once '../app/controllers/' . $this->currentController . '.php';


        $this->currentController = new $this->currentController;

        // Check for existence of method of Controller (second part of url)
        if (isset($url[1])){
            if (method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        // Check for parameters (third part of url)
        $this->params = $url ? array_values($url) : [];

        // Callback with array of parameters
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    /**
     * Constructs all URL parts from the GET array.
     * @return array
     */
    public function getUrl()
    {
        $url = [];

        if (isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
        }

        return $url;
    }
}