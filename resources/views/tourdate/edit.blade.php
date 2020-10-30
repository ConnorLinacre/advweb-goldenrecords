@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">
    <form action="{{ route('edit_tour', ['tourDate' => $tour,]) }}" method="post">
        @csrf
        <div id="form-group">
            <label for="name-input">Name</label>
            <input name="name" value="{{ $tour->name }}" class="form-control" id="name-input">
        </div>
        <p></p>
        <div id="form-group">
            <label for="start_date-input">Start Date</label>
            <input type="date" name="start_date" value="{{ $tour->start_date }}" class="form-control" id="start_date-input">
        </div>
        <p></p>
        <div id="form-group">
            <label for="end_date-input">End Date</label>
            <input type="date" name="end_date" value="{{ $tour->end_date }}" class="form-control" id="end_date-input">
        </div>
        <p></p>
        <div id="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</main>
@endsection
