@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Crea nuovo progetto</h2>

    <form action="{{route('admin.project.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group mt-3">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="form-group mt-3">
            <label for="start_date">Start Date:</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>

        <div class="form-group mt-3">
            <label for="end_date">End Date:</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Crea Progetto</button>
    </form>
</div>
@endsection
