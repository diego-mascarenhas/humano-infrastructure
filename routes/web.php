<?php

use Illuminate\Support\Facades\Route;
use Idoneo\HumanoInfrastructure\Http\Controllers\ServerController;
use Idoneo\HumanoInfrastructure\Http\Controllers\HostingController;

Route::middleware(['web', 'auth'])->group(function ()
{
	// Servers
	Route::get('/servers', [ServerController::class, 'index'])->name('servers.index');
	Route::get('/servers/create', [ServerController::class, 'create'])->name('servers.create');
	Route::get('/servers/{server}', [ServerController::class, 'show'])->name('servers.show');

	// Hosting
	Route::get('/hosting', [HostingController::class, 'index'])->name('hosting.index');
	Route::get('/hosting/create', [HostingController::class, 'create'])->name('hosting.create');
	Route::get('/hosting/{hosting}', [HostingController::class, 'show'])->name('hosting.show');
});

