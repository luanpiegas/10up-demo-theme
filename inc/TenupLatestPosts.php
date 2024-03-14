<?php

class TenupLatestPosts
{
    private $endpoint = 'https://10up.com/wp-json/wp/v2/posts/';
    
    public function __construct()
    {
        add_action( 'init', array( $this, 'get_published_posts' ) );
    }

    public function get_published_posts() {
        $response = wp_remote_get( $this->endpoint );
        $published_posts = json_decode( $response['body'], true );

        return $published_posts;
    }
}