@extends('layouts.admin')

@section('content')
	<div class="container mt-5">
		<h2>Stai modificando: {{ $project->name }}</h2>

		<form action="{{ route('admin.project.update', $project) }}" method="POST" enctype="multipart/form-data">
			@method('PUT')
			@csrf
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}" required>
			</div>

			@if (Str::startsWith($project->img, 'http'))
				<div class="form-group mt-3">
					<img src="{{ $project->img }}" alt="">
				</div>
			@else
				<div class="form-group mt-3">
					<img src="{{ asset('storage/' . $project->img) }}" alt="">
				</div>
			@endif
			<div class="form-group mt-3">
				<input type="file" name="img" id="img" class="form-control mt-3">
			</div>

			<div class="form-group mt-3">
				<label for="description">Description:</label>
				<textarea class="form-control" id="description" name="description" rows="3" required>{{ $project->description }}</textarea>
			</div>

			<div class="form-group mt-3">
				<label for="start_date">Start Date:</label>
				<input type="date" class="form-control" id="start_date" name="start_date" value="{{ $project->start_date }}"
					required>
			</div>

			<div class="form-group mt-3">
				<label for="end_date">End Date:</label>
				<input type="date" class="form-control" id="end_date" name="end_date" value="{{ $project->end_date }}">
			</div>

			<button type="submit" class="btn btn-primary mt-3">Modifica Progetto</button>
		</form>
	</div>
@endsection
