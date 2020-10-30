@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-4">
        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <img src="{{ asset('images/GoldenRecords_OMD.jpg') }}" class="rounded mx-auto d-block" style="width: 30%; height: 30%"/>
            <br/>
        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            <header class="font-semibold bg-gray-200 text-gray-700 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                About the Band
            </header>
            <!-- Changed dashboard text to display user name. -->
            <div class="w-full p-6">
                <p class="text-gray-700">
                    {{ App\Models\User::where('id', '=', '1')->first()->description }}
                </p>
            </div>
            <div style="padding-left: 5px; padding-right: 5px">
                @foreach($tours as $tour)
                    @include('tourdate.card', [
                        'name' => $tour->name,
                        'from' => $tour->start_date,
                        'to' => $tour->end_date,
                        'tour' => $tour,
                    ])
                    <br />
                @endforeach
            </div>
        </section>
    </div>
</main>
@endsection
