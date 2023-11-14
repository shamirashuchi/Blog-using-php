<?php


namespace App\classes;


class Blogdata
{
          public $Blogposts = [];

          public function __construct()
          {
              $this->Blogposts = [
              0 => [
                  'id' => 1,
                  'title' => 'Introduction to JavaScript',
                  'content' => 'JavaScript is a programming language...',
                  'author' => 'John Doe',
                  'date' => '2023-01-15',
                  'tags' => ['JavaScript', 'Programming'],
              ],
              1 => [
                  'id' => 2,
                  'title' => 'Getting Started with React',
                  'content' => 'React is a popular JavaScript library for building user interfaces...',
                  'author' => 'Jane Smith',
                  'date' => '2023-02-10',
                  'tags' => ['React', 'Frontend'],
              ],
              2 => [
                  'id' => 3,
                  'title' => 'Node.js and Server-Side JavaScript',
                  'content' => 'Node.js allows JavaScript to be run on the server side...',
                  'author' => 'Bob Johnson',
                  'date' => '2023-03-05',
                  'tags' => ['Node.js', 'Backend'],
              ]
          ];
          }
    public function getAllBlog()
    {
        return $this->Blogposts;
    }
}