<?php


namespace APP\classes;


class Home
{
    public function index()
    {
        header('Location: action.php?page=home');
    }
}