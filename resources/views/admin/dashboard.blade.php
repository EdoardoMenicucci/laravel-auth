@extends('layouts.admin')

@section('content')
	<div class="container-fluid mt-4">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Dashboard') }}</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif
						<a href="{{ route('admin.project.index') }}"><button class="btn btn-primary">Vai ai progetti</button></a>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
