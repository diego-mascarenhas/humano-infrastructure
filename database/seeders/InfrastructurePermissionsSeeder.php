<?php

namespace HumanoInfrastructure\Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class InfrastructurePermissionsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		// Hosting permissions
		Permission::firstOrCreate(['name' => 'hosting.index']);
		Permission::firstOrCreate(['name' => 'hosting.list']);
		Permission::firstOrCreate(['name' => 'hosting.create']);
		Permission::firstOrCreate(['name' => 'hosting.show']);
		Permission::firstOrCreate(['name' => 'hosting.edit']);
		Permission::firstOrCreate(['name' => 'hosting.store']);
		Permission::firstOrCreate(['name' => 'hosting.update']);
		Permission::firstOrCreate(['name' => 'hosting.destroy']);

		// Domain permissions
		Permission::firstOrCreate(['name' => 'domain.index']);
		Permission::firstOrCreate(['name' => 'domain.list']);
		Permission::firstOrCreate(['name' => 'domain.create']);
		Permission::firstOrCreate(['name' => 'domain.show']);
		Permission::firstOrCreate(['name' => 'domain.edit']);
		Permission::firstOrCreate(['name' => 'domain.store']);
		Permission::firstOrCreate(['name' => 'domain.update']);
		Permission::firstOrCreate(['name' => 'domain.destroy']);

		// Server permissions
		Permission::firstOrCreate(['name' => 'server.index']);
		Permission::firstOrCreate(['name' => 'server.list']);
		Permission::firstOrCreate(['name' => 'server.create']);
		Permission::firstOrCreate(['name' => 'server.show']);
		Permission::firstOrCreate(['name' => 'server.edit']);
		Permission::firstOrCreate(['name' => 'server.store']);
		Permission::firstOrCreate(['name' => 'server.update']);
		Permission::firstOrCreate(['name' => 'server.destroy']);
	}
}

