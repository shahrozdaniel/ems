<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		try {
			$events = Events::with('attendees')->get();
			return view('event.index', compact('events'));
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
		return view('event.create');
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
				'description' => 'required|string|max:255',
				'date' => 'required|date',
				'type' => 'required|in:Conference,Workshop,Meetup',
			]);

			$event = new Events();
			$event->name = $request->name;
			$event->description = $request->description;
			$event->date = $request->date;
			$event->type = $request->type;
			$event->save();

			return back()->with('success', 'Event created successfully');
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
		try {
			$event = Events::find($id);
		return view('event.edit', compact('event'));
		} catch (\Exception $e) {
			return back()->with('error', 'Error: ' . $e->getMessage());
		}
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
		try {
			$request->validate([
				'name' => 'required|string|max:255',
				'description' => 'required|string|max:255',
				'date' => 'required|date',
				'type' => 'required|in:Conference,Workshop,Meetup',
			]);

			$event = Events::find($id);
			$event->name = $request->name;
			$event->description = $request->description;
			$event->date = $request->date;
			$event->type = $request->type;
			$event->save();

			return back()->with('success', 'Event updated successfully');
		} catch (\Exception $e) {
			return back()->with('error', 'Error: ' . $e->getMessage());
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		try {
			$event = Events::find($id);
		$event->delete();
		return back()->with('success', 'Event deleted successfully');
		} catch (\Exception $e) {
			return back()->with('error', 'Error: ' . $e->getMessage());
		}
	}
}
