{{-- @if (Auth::user()) --}}
@extends('layouts.admin')
{{-- @else
	@extends('layouts.app')
@endif --}}



@section('content')
	<div class="container-fluid mt-4">
		<div class="row justify-content-center">
			@foreach ($projects as $project)
				<div class="col-md-3 m-3">
					<div class="card">
						<div class="card-header"><a href="{{ route('admin.project.show', $project) }}">{{ $project->name }}</a></div>
						<div class="card-body">
							@if (Str::startsWith($project->img, 'http'))
								<img src="{{ $project->img }}" alt="">
							@else
								<img src="{{ asset('storage/' . $project->img) }}" alt="">
							@endif
							<div>{{ $project->description }}</div>
							<div>-Data inizio: {{ $project->start_date }}</div>
							<div>-Data fine: {{ $project->end_date }}</div>
							@if ($project->status)
								<div class="green fw-bold">Completato</div>
							@else
								<div class="red fw-bold">Non Completato</div>
							@endif
							<div>Tipo: {{ $project->type->name }}</div>
							<div><i class="{{ $project->type->icon }} fa-2x"></i></div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
