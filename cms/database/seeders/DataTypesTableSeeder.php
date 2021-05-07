<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('data_types')->delete();

        \DB::table('data_types')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2021-04-27 04:45:31',
                'updated_at' => '2021-04-27 04:45:31',
                'server_side' => 0,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'details' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2021-04-27 04:45:31',
                'updated_at' => '2021-04-27 04:45:31',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => NULL,
                'details' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2021-04-27 04:45:31',
                'updated_at' => '2021-04-27 04:45:31',
                'server_side' => 0,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'policy_name' => NULL,
                'details' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2021-04-27 04:45:31',
                'updated_at' => '2021-04-27 04:45:31',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => NULL,
                'details' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2021-04-27 04:45:31',
                'updated_at' => '2021-04-27 04:45:31',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'details' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2021-04-27 04:45:31',
                'updated_at' => '2021-04-27 04:45:31',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => NULL,
                'details' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'products',
                'slug' => 'products',
                'display_name_singular' => 'Product',
                'display_name_plural' => 'Products',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Product',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2021-04-27 05:15:06',
                'updated_at' => '2021-04-27 05:15:06',
                'server_side' => 1,
                'controller' => NULL,
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
            ),
            7 =>
            array (
                'id' => 11,
                'name' => 'orders',
                'slug' => 'orders',
                'display_name_singular' => 'Order',
                'display_name_plural' => 'Orders',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Models\\Order',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2021-05-02 07:24:37',
                'updated_at' => '2021-05-02 07:24:37',
                'server_side' => 0,
                'controller' => '\\App\\Http\\Controllers\\Voyager\\OrdersController',
                'policy_name' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
            ),
        ));


    }
}
