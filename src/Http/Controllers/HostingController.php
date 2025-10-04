<?php

namespace Idoneo\HumanoInfrastructure\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HostingController extends BaseController
{
	public function index()
	{
		return view('humano-infrastructure::hosting.index');
	}

	public function show($id)
	{
		return view('humano-infrastructure::hosting.show', ['hostingId' => $id]);
	}

	public function create()
	{
		return view('humano-infrastructure::hosting.create');
	}
}

