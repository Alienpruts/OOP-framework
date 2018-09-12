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
        $this->postModel = $this->model('Post');
    }

    public function index()
    {
        $data = ['title' => 'Welcome'];
        $this->view('pages/index', $data);
    }

    public function about($id = null)
    {
        $data = ['title' => 'About us'];
        $this->view('pages/about', $data);
    }
}