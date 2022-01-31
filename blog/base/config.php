<?php
const DB_USER = 'root';
const DB_NAME = 'blog_db';
const DB_HOST = 'localhost';
const DB_PASSWORD = '';

const ADMIN_IDS = [9];

function d(...$args)
{
    var_dump($args);
    die;
}