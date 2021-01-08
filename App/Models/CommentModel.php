<?php

namespace App\Models;

use App\Libraries\MySql;

class CommentModel extends Model
{
    // Name of the table
    protected $model = "comment";

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
}
