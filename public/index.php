
<?php
define('PREVENT_DIRECT_ACCESS', TRUE);

/*
 *---------------------------------------------------------------
 * CORS SETTINGS
 *---------------------------------------------------------------
 */

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 *
 * Copyright (c) 2020 Ronald M. Marasigan
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan
 * @since Version 1
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
 *---------------------------------------------------------------
 * SYSTEM DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "scheme" directory.
 * Set the path if it is not in the same directory as this file.
 *
 * NO TRAILING SLASH!
 */
$system_path = 'scheme';

/*
 *---------------------------------------------------------------
 * APPLICATION DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "app" directory.
 *
 * NO TRAILING SLASH!
 */
$application_folder = 'app';

/*
 *---------------------------------------------------------------
 * PUBLIC DIRECTORY NAME
 *---------------------------------------------------------------
 */
$public_folder = 'public';

/*
 * ------------------------------------------------------
 * DEFINE APPLICATION CONSTANTS
 * ------------------------------------------------------
 */
define('ROOT_DIR', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('SYSTEM_DIR', ROOT_DIR . $system_path . DIRECTORY_SEPARATOR);
define('APP_DIR', ROOT_DIR . $application_folder . DIRECTORY_SEPARATOR);
define('PUBLIC_DIR', $public_folder);

/*
 * ------------------------------------------------------
 * LOAD LAVALUST FRAMEWORK
 * ------------------------------------------------------
 */
require_once SYSTEM_DIR . 'kernel/LavaLust.php';