@extends('layouts/layoutMaster')

@section('title', __('Hosting'))

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
	<div class="d-flex flex-column justify-content-center">
		<h4 class="mb-1 mt-3">{{ __('Hosting') }}</h4>
		<p class="text-muted">{{ __('Manage hosting accounts') }}</p>
	</div>
	@can('hosting.create')
	<div class="mt-3 mt-md-0">
		<a href="{{ route('hosting.create') }}" class="btn btn-primary">
			<i class="ti ti-plus me-1"></i> {{ __('New Hosting') }}
		</a>
	</div>
	@endcan
</div>

<div class="card">
	<div class="card-body">
		<p>{{ __('Hosting accounts list view placeholder') }}</p>
	</div>
</div>
@endsection

