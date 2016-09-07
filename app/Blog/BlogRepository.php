<?php

namespace Alex\Blog;

interface BlogRepository
{
    public function getAllPosts();

    public function getAllPostsTitles();

    public function getSinglePost($year, $month, $title);
}
