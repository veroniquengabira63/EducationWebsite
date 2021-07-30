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

$route['contact'] = 'home/contact';

$route['exams_list'] = 'home/exams_list';

$route['courses'] = 'topcourses/index';

$route['courses/courses-after-10th'] = 'topcourses/course_after_10th';

$route['courses/subcourses-after-10th'] = 'topcourses/subcourse_after_10th';

$route['courses/course-overview'] = 'topcourses/course_overview';

$route['news'] = 'home/allNews';

$route['study-abroad'] = 'home/study_abroad';

$route['distance-education'] = 'home/distance_education';

$route['study-mbbs'] = 'home/study_mbbs';

$route['login'] = 'home/user_login';

$route['register'] = 'home/user_registration';

$route['user/(:any)'] = 'home/user_dashboard';

$route['resend-email-verification'] = 'home/resend_email_verification';

$route['(:any)/(:num)/(:any)/(:any)'] = 'home/archieve/$1/$2/$3';

$route['abroad/(:any)'] = 'home/archieve/abroad/$2';

$route['single/(:num)/(:any)'] = 'home/single_college/$2';

$route['courses/(:num)'] = 'home/college_course/$2';

$route['admission/(:num)'] = 'home/college_admission/$2';

$route['scholarships/(:num)'] = 'home/college_scholarships/$2';

$route['placement/(:num)'] = 'home/college_placement/$2';

$route['gallery/(:num)'] = 'home/college_gallery/$2';

$route['news/(:num)'] = 'home/college_news/$2';

$route['india/(:any)'] = 'home/archieve/india/$2';

$route['distance-education/(:any)'] = 'home/distance_education/$2';

$route['activate'] = 'home/activate';

$route['study-in-uk'] = 'home/study_uk';

$route['exams'] = 'exams/index';

$route['single-exam'] = 'exams/single_exam_overview';

$route['single-comedian'] = 'home/single_comedian';

$route['single-show'] = 'home/single_show';

$route['single-venue'] = 'home/single_venue';


$route['comedian/(:any)/(:num)'] = 'home/single_comedian/$1/$2';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

