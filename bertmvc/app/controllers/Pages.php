<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 17:03
 */

class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('hello');
    }

    public function about($id = null)
    {

    }
}