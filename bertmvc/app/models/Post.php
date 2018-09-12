<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 12/09/18
 * Time: 15:00
 */

class Post
{
    private $db;

    /**
     * Post constructor.
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPosts()
    {
        $this->db->query('SELECT * FROM posts');

        $results = $this->db->resultSet();

        return $results;
    }


}