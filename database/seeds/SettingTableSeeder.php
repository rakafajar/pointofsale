<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert(array(
        	[
        		'nama_perusahaan' => 'Rakamart',
        		'alamat' => 'Komplek Pasir Jati B.131',
        		'telepon' => '088233112',
        		'logo' => 'logo.png',
        		'kartu_member' => 'card.png',
        		'diskon_member' => '10',
        		'tipe_nota' => '0'
        	]
        ));
    }
}
