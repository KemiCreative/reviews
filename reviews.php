<?php
/*
Plugin Name:  KemiCreative Social Reviews
Plugin URI:   https://github.com/KemiCreative/reviews
Description:  Plugin that pulls reviews from some of your favorite social media sites and populates them into visual widgets on your website.
Version:      1.0.0
Author:       Michael Schut, Kevin Stalder
License:      GPL2
License       URI: https://www.gnu.org/licenses/gpl-2.0.html)
Text Domain:  kemicreative
*/


/**
 * 1) Set up admin Page
 *    Set Area where we can store API Keys for all reviews options
 *    # of reviews to pull?
 *    Options for visual style?
 *  2) Class to pull reviews and setting style?
 *      Sub class for each Review source and extend main class?
 * 
 */
Class kemi_reviews {
  protected $reviews = 10;
}

Class kemi_google_review {

}