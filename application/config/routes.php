<?php

defined('BASEPATH') OR exit('No direct script access allowed');



/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	https://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/

$route['default_controller'] = 'home';

$route['404_override'] = 'home/page_not_found';

$route['certificate/(:any)']		= "addons/certificate/generate_certificate/$1";



//course bundles

$route['course_bundles/(:any)']								= "addons/course_bundles/index/$1";

$route['course_bundles']									= "addons/course_bundles";

$route['course_bundles/search/(:any)']						= "addons/course_bundles/search/$1";

$route['course_bundles/search/(:any)/(:any)']				= "addons/course_bundles/search/$1/$1";

$route['bundle_details/(:any)/(:any)']  					= "addons/course_bundles/bundle_details/$1";

$route['bundle_details/(:any)']  							= "addons/course_bundles/bundle_details/$1/$1";

$route['course_bundles/buy/(:any)']  						= "addons/course_bundles/buy/$1";

$route['home/my_bundles']  									= "addons/course_bundles/my_bundles";

$route['home/bundle_invoice/(:any)']  						= "addons/course_bundles/invoice/$1";

//end course bundles



$route['translate_uri_dashes'] = TRUE;

$route['courses'] = "home/courses";
$route['magazines'] = 'home/magazines';
$route['question-papers'] = 'home/question_papers';

$route['courses/(:any)'] = "home/courses/$1";
$route['magazines/(:any)'] = 'home/magazines/$1';
$route['question-papers/(:any)'] = 'home/question_papers/$1';


$route['courses/(:any)/(:any)'] = "home/course/$1/$2";
$route['magazines/(:any)/(:any)'] = "home/course/$1/$2";
$route['question-papers/(:any)/(:any)'] = "home/course/$1/$2";



$route['jobs'] = 'home/jobs';
$route['jobs/(:any)/(:any)'] = 'home/jobs/$1/$2';
$route['jobs/(:any)'] = 'home/jobs/$1';

$route['contact-us'] = 'home/contact_us';

$route['advertise-with-us'] = 'home/advertise_with_us';

$route['about-us'] = 'home/about_us';

$route['privacy-policy'] = 'home/privacy_policy';

$route['terms-and-condition'] = 'home/terms_and_condition';

$route['refund-policy'] = 'home/refund_policy';

$route['dictionary/(:any)'] = 'home/dictionary/$1';

$route['faq'] = 'home/faqs';


$route['login'] = 'home/login';
$route['sign-up'] = 'home/sign_up';


$route['my-courses'] = 'home/my_courses';
$route['profile'] = 'home/profile';
$route['profile/(:any)'] = 'home/profile/$1';


$route['my-wishlist'] = 'home/my_wishlist';

$route['my-messages'] = 'home/my_messages';

$route['purchase-history'] = 'home/purchase_history';

// $route['slug_routes'] = array('home');