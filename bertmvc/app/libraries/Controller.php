<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 14:03
 */

/**
 * Class Controller
 * Base Controller - loads models and views. Other controllers should extend from this
 */
class Controller
{
    public function model($model)
    {
        // Load Model file and instantiate.
        require_once '../models/' . ucfirst($model) . '.php';

        return new $model();
    }

    public function view($view, $data = [])
    {
        if (file_exists('../views/' . ucfirst($view) . '.php')){
        require_once '../views/' . ucfirst($view) . '.php';
        } else {
            die('View does not exist!');
    }

    }
}