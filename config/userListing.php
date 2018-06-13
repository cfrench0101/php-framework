<?php

/*
 * This file defines users when authentication type is set to internal.
 */

 define('APP_USER_LISTING',
    serialize(
        array (
            // Demo User
            array (
                'username'  => 'cfrench',
                'password'  => 'dixie26',
                'email'     => 'cfrench0101@gmail.com',
                'firstName' => 'Cody',
                'lastName'  => 'French',
                'role'      => array(
                    'ROLE_USER',
                ),
            ),

            // Demo Admin User
            array (
                'username'  => 'admin',
                'password'  => 'iddqd',
                'email'     => 'janesmith@gmail.com',
                'lastName'  => 'Smith',
                'firstName' => 'Jane',
                'role'      => array(
                    'ROLE_USER',
                    'ROLE_ADMIN',
                ),
            ),
        )
    )
);
