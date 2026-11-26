<?php

namespace App\Controllers;

class ClickHouse extends BaseController
{
    public function migrationToolApac()
    {
        $data = [
            'title' => 'Migration Tool ClickHouse APAC',
        ];

        return view('pages/clickhouse/migration-tool-clickhouse-apac', $data);
    }
}