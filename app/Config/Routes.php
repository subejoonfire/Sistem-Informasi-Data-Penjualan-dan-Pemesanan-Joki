<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//admin
$routes->get('/', 'Home::index');
$routes->get('/tableadm', 'TableAdm::index');
$routes->get('/menuadm', 'MenuAdm::index');
$routes->get('/pegawaicrud', 'PegawaiCrud::index');
$routes->get('/teamadm', 'TeamAdm::index');
$routes->get('/chart', 'Chart::index');
$routes->get('/fuindex', 'FuIndex::index');
$routes->get('/add_data_menu', 'MenuAdm::add_data_menu');
$routes->post('/proses_add_menu', 'MenuAdm::proses_add_menu');
$routes->get('menuadm/(:num)', 'MenuAdm::delete/$1');
$routes->get('menuadm/edit/(:num)', 'MenuAdm::edit/$1');
$routes->post('menuadm/update', 'MenuAdm::update');
$routes->delete('menuadm/(:num)', 'MenuAdm::delete/$1');
$routes->get('/add_data_pegawai', 'PegawaiCrud::add_data_pegawai');
$routes->post('/proses_add_pegawai', 'PegawaiCrud::proses_add_pegawai');
$routes->get('pegawaicrud/edit/(:num)', 'PegawaiCrud::edit/$1');
$routes->post('pegawaicrud/update', 'PegawaiCrud::update');
$routes->delete('pegawaicrud/(:num)', 'PegawaiCrud::delete/$1');
$routes->get('pegawaicrud/(:num)', 'PegawaiCrud::delete/$1');



//freeuser
$routes->get('/h', 'freeuser\Homefreeuser::index');
$routes->get('/shopall', 'freeuser\Homefreeuser::shopall');
$routes->post('checkout/(:num)', 'freeuser\Homefreeuser::checkout/$1'); // incorrect if no argument is provided
$routes->get('/cart', 'freeuser\Homefreeuser::cart');
$routes->get('/cart/(:segment)', 'freeuser\Homefreeuser::cart/$1');
$routes->get('/shopmakanan', 'freeuser\Homefreeuser::shopmakanan');
$routes->get('/shopminuman', 'freeuser\Homefreeuser::shopminuman');
$routes->post('pembelian/submitForm', 'freeuser\Pembelian::submitForm');
$routes->post('cart/checkout', 'Cart::checkout');



// penjualan
$routes->get('sales', 'Sales::index');
$routes->get('salesfu', 'pegawai\SalesFu::index');

//login
$routes->get('login', 'Auth::login');
$routes->post('loginAuth', 'Auth::loginAuth');

//pegawai
$routes->get('/pegawaifu', 'pegawai\PegawaiFu::index');
$routes->get('/penjualanpg', 'pegawai\PegawaiFu::penjualanpg');
$routes->get('/menupgw', 'pegawai\MenuPgw::index');
$routes->get('/add_data_menupgw', 'pegawai\MenuPgw::add_data_menu');
$routes->post('/proses_add_menupgw', 'pegawai\MenuPgw::proses_add_menu');
$routes->delete('menupgw/(:num)', 'pegawai\MenuPgw::delete/$1');
$routes->get('menupgw/(:num)', 'pegawai\MenuPgw::delete/$1');
$routes->post('menupgw/update', 'pegawai\MenuPgw::update');
