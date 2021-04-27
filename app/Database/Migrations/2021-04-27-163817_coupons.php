<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Coupons extends Migration
{
	public function up()
	{
		$this->forge->addColumn("coupons",[
            'paid' => ['type' => 'boolean',"default"=>false]
        ]);
        
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
