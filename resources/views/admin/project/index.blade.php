@extends('layouts.admin')

@section('content')
	<div class="container-fluid">
		<div class="row justify-content-center pt-3">
			<div class="card col-md-3 m-3">a</div>
			<div class="card col-md-3 m-3">a</div>
			<div class="card col-md-3 m-3">a</div>
		</div>
	</div>

	<div class="container-fluid mt-4">
		<div class="row justify-content-center">
			@foreach ($projects as $project)
				<div class="col-md-3 m-3">
					<div class="card">
						<div class="card-header">{{ $project->name }}</div>

						<div class="card-body">
							{{ $project->description }}

						</div>

					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
