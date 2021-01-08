<?php

namespace App\Models;

use App\Libraries\MySql;

class BookModel extends Model
{
    // Name of the table
    protected $model = "book";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $protectedFields = [
        'id',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
    ];

    public function __construct()
    {
        parent::__construct(
            $this->model,
            $this->limit,
            $this->protectedFields
        );
    }

    /**
     * Fetching read books from table
     * @return array of objects
     */
    public static function readlist(array $selectedFields = null)
    {
        $fields = "*";

        if (!empty($selectedFields) && count($selectedFields) > 0) {
            $fields = self::composeQuery($selectedFields);
        }

        $sql = "SELECT " . $fields . " FROM " . 'books' . " WHERE deleted IS NULL AND finished_reading IS TRUE" . (!empty(self::$limit) ? " LIMIT " . self::$limit : "");

        return MySql::query($sql)->fetchAll(\PDO::FETCH_CLASS);
    }
}

new BookModel;
