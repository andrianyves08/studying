<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['sitemap\.xml'] = "sitemap/index";

$route['reviews'] = 'pages/reviews';
$route['resources'] = 'pages/resources';
$route['career'] = 'pages/career';
$route['contact-us'] = 'pages/contact_us';

$route['terms-and-conditions'] = 'pages/terms_and_conditions';
$route['privacy-policy'] = 'pages/privacy_policy';
$route['about-us'] = 'pages/about';
$route['frequently-asked-questions'] = 'pages/faq';
// $route['contact-us'] = 'pages/other_pages/$1';

$route['our-core-values'] = 'pages/core_values';

$route['default_controller'] = 'pages/index';

$route['(:any)'] = 'pages/posts/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;