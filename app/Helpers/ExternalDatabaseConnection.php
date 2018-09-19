<?php
namespace App\Helpers;
use Config;
use DB;

class ExternalDatabaseConnection
{
    public static function setConnection($params = null)
    {
        config(['database.connections.external_db' =>
            [
                'driver' => 'mysql',
                'host' => $params['host'] ?? '127.0.0.1',
                'port' => $params['port'] ?? '3306',
                'username' => $params['username'] ?? 'root',
                'password' => $params['password'] ?? 'qwerty',
                'database' => $params['database'] ?? 'external_dorneo_db',
            ]
        ]);

        return DB::connection('external_db');
    }
}