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

        $this->call('SettingsTableSeeder');
        $this->call('TypesTableSeeder');
        $this->call('SubjectsTableSeeder');
        $this->call('AttributesTableSeeder');
        $this->call('TypesAttributesTableSeeder');
	}

}
