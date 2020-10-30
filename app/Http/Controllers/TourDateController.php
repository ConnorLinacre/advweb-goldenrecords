<?php

namespace App\Http\Controllers;

use App\Models\TourDate;
use Illuminate\Http\Request;

class TourDateController extends Controller
{

    public function create()
    {
        return view('tourdate.create');
    }

    public function store(Request $request)
    {
        $tourDate = TourDate::create([
            'name' => $request->input('name'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);
        $tourDate->save();
        return redirect()->route('home');
    }

    public function show(TourDate $tourDate)
    {
        return view('tourdate.basic', ['tour' => $tourDate,]);
    }

    public function edit(TourDate $tourDate)
    {
        return view('tourdate.edit', ['tour' => $tourDate, ]);
    }

    public function update(Request $request, TourDate $tourDate)
    {
        $tourDate->update([
            'name' => $request->input('name'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);
        return redirect()->route('home');
    }

    public function destroy(TourDate $tourDate)
    {
        $tourDate->delete();
        return redirect()->route('home');
    }
}
