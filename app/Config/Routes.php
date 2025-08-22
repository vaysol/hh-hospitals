<?php
namespace Config;
$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::index');
$routes->get('/about-us', 'AboutUs::index');
$routes->get('/blogs', 'Blogs::index');
$routes->get('/blogs-inner/(:any)', 'Blogs::Blogs_inner/$1');
$routes->get('/contact-us', 'ContactUs::index');
$routes->get('/projects', 'ProjectDetails::ProjectsList');
$routes->get('/privacy-policy', 'PrivacyPolicy::index');
$routes->get('/thank-you/(:any)', 'ThankYou::index/$1');
$routes->get('/error-404', 'Error404::index');

// forms
$routes->post('enquiry/contact-us', 'Enquiry::contact_us');

// admin pages start //
$routes->get('/admin', 'Admin\Admin::index');
$routes->get('/admin/logout', 'Admin\Admin::logout');
$routes->get('/admin/login', 'Admin\Login::index');
$routes->get('/admin/home', 'Admin\Dashboard::index');
$routes->post('/admin/check_login', 'Admin\Login::check_login');

// listing pages
$routes->get('/admin/projects', 'Admin\Projects::index');
$routes->get('/admin/projects/list', 'Admin\Projects::list');
$routes->get('/admin/users', 'Admin\Users::index');
$routes->get('/admin/blogs', 'Admin\Blogs::index');
$routes->get('/admin/doctors', 'Admin\Doctors::index');
$routes->get('/admin/specialities', 'Admin\Speciality::index'); 
$routes->get('/admin/specialities/list', 'Admin\Speciality::list');

// adding pages
$routes->get('/admin/projects/add', 'Admin\Projects::add');
$routes->get('/admin/users/add', 'Admin\Users::add');
$routes->get('/admin/blogs/add', 'Admin\Blogs::add');
$routes->get('/admin/doctors/add', 'Admin\Doctors::add');
$routes->get('/admin/specialities/add', 'Admin\Speciality::add');

// editing pages
$routes->get('/admin/projects/edit/(:any)', 'Admin\Projects::edit/$1');
$routes->get('/admin/users/edit/(:any)', 'Admin\Users::edit/$1');
$routes->get('/admin/blogs/edit/(:any)', 'Admin\Blogs::edit/$1');
$routes->get('/admin/doctors/edit/(:any)', 'Admin\Doctors::edit/$1');
$routes->get('/admin/specialities/edit/(:any)', 'Admin\Speciality::edit/$1');

// delete functions
$routes->get('/admin/projects/delete/(:any)', 'Admin\Projects::delete/$1');
$routes->get('/admin/users/delete/(:any)', 'Admin\Users::delete/$1');
$routes->get('/admin/blogs/delete/(:any)', 'Admin\Blogs::delete/$1');
$routes->get('/admin/doctors/delete/(:any)', 'Admin\Doctors::delete/$1');
$routes->get('/admin/specialities/delete/(:any)', 'Admin\Speciality::delete/$1');

// save functions
$routes->post('/admin/projects/save', 'Admin\Projects::save');
$routes->post('/admin/users/save', 'Admin\Users::save');
$routes->post('/admin/blogs/save', 'Admin\Blogs::save');
$routes->post('/admin/doctors/save', 'Admin\Doctors::save');
$routes->post('/admin/specialities/save', 'Admin\Speciality::save');

// admin pages end //

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}