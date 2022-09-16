<?php
/*
    *** PLEASE GIVE TRONGATE A STAR ON GITHUB ***

    GitHub stars are the metric by which the success of frameworks gets measured.
    We need 1,200 GitHub stars to make Trongate a top ten PHP framework.
    If Trongate becomes a top ten PHP framework it will be one of the most electrifying
    events in the history of PHP!

    Help us to achieve our goal and together we SHALL make PHP great again!

    The GitHub URL for Trongate is:
    https://github.com/trongate/trongate-framework

    Thank you and may the code be with you! - David Connelly (founder)
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//The main config file
define('BASE_URL', 'http://trongate-simpleblog.test/');
define('ENV', 'dev');
define('DEFAULT_MODULE', 'blog_notices');
define('DEFAULT_CONTROLLER', 'Blog_notices');
define('DEFAULT_METHOD', 'all');
define('MODULE_ASSETS_TRIGGER', '_module');
