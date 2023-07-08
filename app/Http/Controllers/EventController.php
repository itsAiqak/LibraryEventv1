<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
	public function index()
    {
        $events = Event::all()->keyBy('id');
        $eventCount = Event::count(); // Retrieve the count of events from the database
        $eventsCountForToday = Event::where('level', 'Negeri')->count();

        return view('Event/index', compact('events', 'eventCount', 'eventsCountForToday'));
    }

	


	public function admin()
	{
		$eventsDB = Event::all();
		$events = [];
		foreach ( $eventsDB as $i => $row ) {
			$events[ $row[ 'id' ] ] = $row;
		}
		return view( 'Event/admin',compact('events'));
	}

	public function handleRequest( Request $request )
	{
		$formdata = $request->all();
		$action = $formdata[ 'action' ];
		unset( $formdata['action'], $formdata['_token'] );

		if ( $action == 'edit' ) { //----------------------------------------------- UPDATE
			$affected = Event::where( 'id', $formdata['id'] )->update( $formdata );

			if ($request->hasFile('eventimage')) {

            
				$file = $request->file('eventimage');
	
					$filename =  $formdata['id'].'-'.$file->getClientOriginalName();
					$file->move(public_path('/Eventimg'), $filename);
					Event::where('id',$formdata['id'])->update([

						'eventimage' => $filename,
						
					]);
				
			}

		} elseif ( $action == 'add' ) { //------------------------------------------ CREATE
			$result = Event::create( $formdata );

			

			if ($request->hasFile('eventimage')) {

            
				$file = $request->file('eventimage');
	
					$filename =  $result->id.'-'.$file->getClientOriginalName();
					$file->move(public_path('/Eventimg'), $filename);
					Event::where('id',$result->id)->update([

						'eventimage' => $filename,
						
					]);
				
			}
			// print_r( $result );
		
		} elseif ( $action == 'delete' ) { //--------------------------------------- DELETE
			$result = Event::where('id',$formdata['id'] )->delete();
			// print_r( $result );
		}
	}
}
