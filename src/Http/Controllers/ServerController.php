<?php

namespace Idoneo\HumanoInfrastructure\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ServerController extends BaseController
{
	public function index()
	{
		return view('humano-infrastructure::servers.index');
	}

	public function show($id)
	{
		return view('humano-infrastructure::servers.show', ['serverId' => $id]);
	}

	public function create()
	{
		return view('humano-infrastructure::servers.create');
	}
}

