@extends('layouts/layoutMaster')

@section('title', __('Server Details'))

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
	<div class="d-flex flex-column justify-content-center">
		<h4 class="mb-1 mt-3"><span class="text-muted fw-light">{{ __('Servers') }}/</span> #{{ $serverId }}</h4>
		<p class="text-muted">{{ __('Server details and configuration') }}</p>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<p>{{ __('Server details view placeholder') }}</p>
	</div>
</div>
@endsection

