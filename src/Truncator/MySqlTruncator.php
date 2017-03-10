<?php

namespace Imjoehaines\Flowder\Truncator;

use PDO;

class MySqlTruncator
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function truncate($table)
    {
        $this->db->exec('TRUNCATE TABLE `' . $table . '`');
    }
}
