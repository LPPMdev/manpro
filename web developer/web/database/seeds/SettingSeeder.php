<?php 
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder {
	public function run()
	{
		// $user = array (
		// 	'what' => 'visi misi',
		// 	'value' => 'n',
		// 	'created_at' => DB::raw('NOW()'),
		// 	'updated_at' => DB::raw('NOW()'),
		// 	);
		
		// DB::table('settings')->insert($user);
		DB::table('settings')->insert([
    [
        'what' => 'visi misi',
        'value' => 'n'
    ],
    [
        'what' => 'sejarah',
        'value' => 'asu'
    ],
    [
    	'what' => 'ketua',
    	'value' => 'asu'
    ],
        [
    	'what' => 'sekretaris',
    	'value' => 'asu'
    ],
        [
    	'what' => 'kesekretariatan',
    	'value' => 'asu'
    ],
        [
    	'what' => 'penelitian',
    	'value' => 'asu'
    ],
        [
    	'what' => 'pengabdian',
    	'value' => 'asu'
    ],
        [
    	'what' => 'kkn',
    	'value' => 'asu'
    ],
        [
    	'what' => 'penelitian-drpm',
    	'value' => 'asu'
    ],
        [
    	'what' => 'penelitian-ukdw',
    	'value' => 'asu'
    ],
        [
    	'what' => 'penelitian-kopertis',
    	'value' => 'asu'
    ],
        [
    	'what' => 'penelitian-pemda',
    	'value' => 'asu'
    ],
        [
    	'what' => 'penelitian-rip',
    	'value' => 'asu'
    ],
        [
    	'what' => 'penelitian-penjaminan-mutu',
    	'value' => 'asu'
    ],
        [
    	'what' => 'pengabdian-drpm',
    	'value' => 'asu'
    ],
        [
    	'what' => 'pengabdian-ukdw',
    	'value' => 'asu'
    ],
        [
    	'what' => 'pengabdian-ripkm',
    	'value' => 'asu'
    ],
        [
    	'what' => 'pengabdian-penjaminan-mutu',
    	'value' => 'asu'
    ],
        [
    	'what' => 'kkn-panduan',
    	'value' => 'asu'
    ],
        [
    	'what' => 'kkn-persyaratan-umum',
    	'value' => 'asu'
    ],
        [
    	'what' => 'kkn-faq',
    	'value' => 'asu'
    ],
        [
    	'what' => 'kkn-pendaftaran',
    	'value' => 'asu'
    ]

]);
	}
}

 ?>