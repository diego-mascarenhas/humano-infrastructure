<?php

namespace Idoneo\HumanoInfrastructure;

use Idoneo\HumanoInfrastructure\Models\SystemModule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HumanoInfrastructureServiceProvider extends PackageServiceProvider
{
	public function configurePackage(Package $package): void
	{
		$package
			->name('humano-infrastructure')
			->hasViews()
			->hasRoutes('web')
			->hasMigrations([
				'create_servers_table',
				'create_hosting_accounts_table',
				'create_domains_table',
			]);
	}

	public function bootingPackage(): void
	{
		parent::bootingPackage();

		try {
			if (Schema::hasTable('modules')) {
				if (class_exists(\App\Models\Module::class)) {
					\App\Models\Module::updateOrCreate(
						['key' => 'infrastructure'],
						[
							'name' => 'Infrastructure',
							'icon' => 'ti ti-server',
							'description' => 'Infrastructure management (hosting, servers, domains)',
							'is_core' => false,
							'status' => 1,
						]
					);
				} else {
					SystemModule::query()->updateOrCreate(
						['key' => 'infrastructure'],
						[
							'name' => 'Infrastructure',
							'icon' => 'ti ti-server',
							'description' => 'Infrastructure management (hosting, servers, domains)',
							'is_core' => false,
							'status' => 1,
						]
					);
				}
			}
		} catch (\Throwable $e) {
			Log::debug('HumanoInfrastructure: module registration skipped: ' . $e->getMessage());
		}

		// Ensure permissions exist for menus and access
		try {
			if (Schema::hasTable('permissions') && class_exists(Permission::class)) {
				$permissions = [
					'server.list',
					'server.show',
					'server.create',
					'server.edit',
					'server.destroy',
					'hosting.list',
					'hosting.show',
					'hosting.create',
					'hosting.edit',
					'hosting.destroy',
				];

				foreach ($permissions as $name) {
					Permission::firstOrCreate(['name' => $name], ['guard_name' => 'web']);
				}

				$adminRole = class_exists(Role::class) ? Role::where('name', 'admin')->first() : null;
				if ($adminRole) {
					$adminRole->givePermissionTo($permissions);
				}
			}
		} catch (\Throwable $e) {
			Log::debug('HumanoInfrastructure: permissions setup skipped: ' . $e->getMessage());
		}
	}
}

