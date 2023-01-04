<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Watchlists extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'id' 		=> 		[
				'type' => 'INT',
				'auto_increment' => TRUE,
			],
			'watchlistId'          => [
				'type'           => 'INT',
                'constraint' 	 => '32',
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
			'backdrop_path' => [
				'type' => 'varchar',
				'constraint' => '1000'
			]
 
		]);
        $this->forge->addPrimaryKey('id',true);
        $this->forge->createTable('watchlist');
    }

    public function down()
    {
        //
		$this->forge->dropTable('watchlist');
    }
}
