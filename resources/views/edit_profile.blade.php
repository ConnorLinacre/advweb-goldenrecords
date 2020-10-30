@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('edit_profile') }}" method="post">
            @csrf
            <div id="form-group">
                <label for="name-input">Name</label>
                <input name="name" value="{{ App\Models\User::where('id', '=', '1')->first()->name }}" class="form-control" id="name-input">
            </div>
            <p></p>
            <div id="form-group">
                <label for="description-input">Description</label>
                <textarea name="description" class="form-control" id="description-input" rows="5">{{ App\Models\User::where('id', '=', '1')->first()->description }}</textarea>
            </div>
            <p></p>
            <div id="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</main>
@endsection
