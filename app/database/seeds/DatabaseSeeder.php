<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TriggersTableSeeder');
		$this->call('GameTypesTableSeeder');
		$this->call('FlagsTableSeeder');
		$this->call('OptionsTableSeeder');
		$this->call('QuickLinksTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('PagesTableSeeder');
		$this->call('PermissionsTableSeeder');
	}

}
