<?php

defined('SYSPATH') or die('No direct script access.');

class SocialFilter {

    public function __construct() {
        Event::add('ushahidi_action.header_item', array($this, 'hook'));
    }


    public function hook() {
        $data = array(
            'facebook_user'=>'zabatak',
            'twitter_user'=>'zabatak',
            'facebook_id' => '160960213993164',
        );
       echo View_Core::factory('socialfollowers', $data)->render();
    }

}

new SocialFilter();