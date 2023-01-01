<?php
require_once 'vendor/autoload.php';
use APP\classes\Blog;

if ($_GET['page'] == 'home')
{
    include 'pages/home.php';
}elseif ($_GET['page'] == 'blogs')
{
    $blogs = new Blog();
    $addBlog = $blogs->addBlog();
    include 'pages/blogs.php';
}elseif ($_GET['page'] == 'details')
{
    $blog = new Blog();
    $details = $blog->getDetailsBlog($_GET['id']);
    include 'pages/details.php';
}
