@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">
    <form action="{{ route('create_tour') }}" method="post">
        @csrf
        <div id="form-group">
            <label for="name-input">Name</label>
            <input name="name" value="" class="form-control" id="name-input">
        </div>
        <p></p>
        <div id="form-group">
            <label for="start_date-input">Start Date</label>
            <input type="date" name="start_date" value="" class="form-control" id="start_date-input">
        </div>
        <p></p>
        <div id="form-group">
            <label for="end_date-input">End Date</label>
            <input type="date" name="end_date" value="" class="form-control" id="end_date-input">
        </div>
        <p></p>
        <div id="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
    <script>
        Date.prototype.toDateInputValue = (function() {
            var local = new Date(this);
            local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
            return local.toJSON().slice(0,10);
        });
        document.getElementById('start_date-input').value = new Date().toDateInputValue();
        document.getElementById('end_date-input').value = new Date().toDateInputValue();
    </script>
</main>
@endsection
