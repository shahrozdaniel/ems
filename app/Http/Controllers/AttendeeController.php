<?php

namespace App\Http\Controllers;

use App\Models\Attendees;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AttendeeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		try {
			$attendees = Attendees::with('event')->get();
			return view('attendee.index', compact('attendees'));
		} catch (\Exception $e) {
			return back()->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		try {
			$events = Events::select(['id', 'name'])->get();
		return view('attendee.create', compact('events'));
		} catch (\Exception $e) {
			return back()->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		try {
			$request->validate([
				'name' => 'required|string|max:255',
				'email' => 'required|email',
				'phone' => 'required|string',
				'event' => 'required|unique:attendees,event_id,NULL,id,email,' . $request->email,
			]);

			$event = new Attendees();
			$event->name = $request->name;
			$event->email = $request->email;
			$event->phone = $request->phone;
			$event->event_id = $request->event;
			$event->save();

			return back()->with('success', 'Attendee created successfully');
		} catch (\Exception $e) {
			return back()->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
