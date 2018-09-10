<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 17:03
 */

class Pages
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        var_dump('This is the index page');
    }

    public function about($id = null)
    {
        var_dump('this is about page');
        var_dump('with id : ' . $id);
    }
}