<?php defined('SYSPATH') OR die('No direct access allowed.');

$config['plugins/?;create'] = 'plugins/create';

$config['plugins/detail/([^\.]+).json'] = 'plugins/detail/$1/json';
$config['plugins/detail/([^\.]+).html'] = 'plugins/detail/$1/html';
$config['plugins/detail/([^;]+);(.*)']  = 'plugins/$2/$1';
$config['plugins/detail/(.*)']          = 'plugins/detail/$1/html';

$config['profiles/([^/]+)/']             = 'plugins/sandbox/$1';
$config['profiles/([^/]+)/plugins/']     = 'plugins/sandbox/$1';
$config['profiles/([^/]+)/plugins.json'] = 'plugins/sandbox/$1/json';

$config['profiles/([^/]+)/plugins/?;create'] = 
    'plugins/create/$1';
$config['profiles/([^/]+)/plugins/detail/([^\.]+).json'] = 
    'plugins/detail/$2/json/$1';
$config['profiles/([^/]+)/plugins/detail/([^\.]+).html'] = 
    'plugins/detail/$2/html/$1';
$config['profiles/([^/]+)/plugins/detail/([^;]+);(.*)'] = 
    'plugins/$3/$2/$1';
$config['profiles/([^/]+)/plugins/detail/(.*)'] = 
    'plugins/detail/$2/html/$1';

$config['plugins/submissions/(.*)'] = 'plugins/submission_detail/$1';

$config['plugins/(.*)'] = 'plugins/$1';

$config['pfs/v2'] = 'search/pfs_v2';

$config['_default'] = 'index';