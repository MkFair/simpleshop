<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Settings extends Migration
{
	public function up()
	{
		$this->forge->addField([
            "id"=>[
                "type"=>"INT",
                "unsigned"=>true,
                "auto_increment"=>true
            ],
            "current_price_coupon"=>[
                "type"=>"Decimal(10,2)",
                "default"=>0
            ]
        ]);
        $this->forge->addKey("id",true);
        $this->forge->createTable("settings");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable("settings");
	}
}
