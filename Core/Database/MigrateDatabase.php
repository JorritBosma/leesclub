<?php

namespace Core\Database;

use Core\Database\QueryBuilder;
use Core\App;

/**
 * Check for files which holds database queries to create scheme's
 * @param $dropTable (default = false) set to true to drop all tables and create it again
 */

class MigrateDatabase
{
    protected static $dropTable;

    protected static $seed;

    public static function migrate($dropTable, $seed)
    {
        self::$dropTable = $dropTable;
        self::$seed = $seed;

        self::start();
    }

    private static function start()
    {
        // get files from current directory
        $files = scandir(__DIR__ . "/Migrations/", SCANDIR_SORT_ASCENDING);

        if (count($files) > 1) {
            foreach ($files as $file) {
                // skip files that doesn't represent migration data
                if (trim(strtolower($file)) !== 'migrate.php' && $file !== '.' && $file !== '..') {
                    $migrationData = require_once __DIR__ . "/Migrations/" . $file;

                    if (self::$dropTable) {
                        QueryBuilder::query($migrationData['drop_scheme']);
                    }

                    QueryBuilder::query($migrationData['scheme']);

                    if (self::$seed && isset($migrationData['seeder'])) {
                        if ($migrationData['seeder']['type'] == 'array') {
                            foreach ($migrationData['seeder']['data'] as $seed) {
                                App::get('database')->insert($migrationData['table_name'], $seed);
                            }
                        } else if ($migrationData['seeder']['type'] == 'sql') {
                            QueryBuilder::query($migrationData['seeder']['data']);
                        }
                    }
                }
            }
        }
    }
}
