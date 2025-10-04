@extends('layouts/layoutMaster')

@section('title', __('New Hosting'))

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
	<div class="d-flex flex-column justify-content-center">
		<h4 class="mb-1 mt-3"><span class="text-muted fw-light">{{ __('Hosting') }}/</span> {{ __('New') }}</h4>
		<p class="text-muted">{{ __('Create a new hosting account') }}</p>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<p>{{ __('Hosting creation form placeholder') }}</p>
	</div>
</div>
@endsection

