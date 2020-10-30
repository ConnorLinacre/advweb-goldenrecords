@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">
    {{ $tour->name }}<br />
    {{ $tour->start_date }}<br />
    {{ $tour->end_date }}<br />
    </div>
</main>
@endsection
