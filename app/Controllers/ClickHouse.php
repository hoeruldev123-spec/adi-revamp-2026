<?php

namespace App\Controllers;

class ClickHouse extends BaseController
{
    public function migrationToolsApac()
    {
        $data = [
            'title' => 'Migration Tools ClickHouse APAC',
        ];

        return view('pages/clickhouse/migration-tools-clickhouse-apac', $data);
    }
}