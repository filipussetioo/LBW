<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Watchlists extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'watchlistId'          => [
				'type'           => 'INT',
                'auto_increment' => TRUE,
			],
			'watchlist_title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'streaming_platform'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'username' => [
				'type'           => 'varchar',
				'constraint'     => '100',
			],
 
		]);
        $this->forge->addPrimaryKey('watchlistId',true);
        $this->forge->createTable('watchlist');
    }

    public function down()
    {
        //
    }
}
