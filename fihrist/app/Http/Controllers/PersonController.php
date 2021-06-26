<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    function addPerson()
    {
        return view('add-person');
    }

    function createPerson(Request $request)
    {
        $person = new Person();
        $person->name = $request->name;
        $person->regno = $request->regno;
        $person->email = $request->email;
        $person->address = $request->address;
        $person->phone = $request->phone;
        $path = ($request->photo != null) ? $request->file('photo')->store('public/assets') : null;
        $person->photo = ($request->photo != null) ? $path : $request->photo;
        $person->save();
        return back()->with('person_created', 'Person has been created successfully!');
    }

    function deletePerson($id)
    {
        Person::where('id', $id)->delete();
        return view('people', [
            'people' => Person::all()
        ])->with('person_deleted', 'Person has been deleted successfully!');
    }

    function editPerson($id)
    {
        $person = Person::where('id', $id)->first();
        return view('edit-person', compact(('person')));
    }

    function updatePerson(Request $request)
    {
        $person = Person::find($request->id);
        $person->name = $request->name;
        $person->regno = $request->regno;
        $person->email = $request->email;
        $person->address = $request->address;
        $person->phone = $request->phone;
        $path = ($request->photo != null) ? $request->file('photo')->store('public/assets') : null;
        $person->photo = ($request->photo != null) ? $path : $person->photo;
        $person->save();
        return back()->with('person_updated', 'Person has been updated successfully!');
    }


    public function index()
    {


        return view(
            'people',
            [
                'people' => Person::latest()->filter()->get()
            ]
        );
    }

    public function show(Person $person)
    {
        return view('person', [
            'person' => $person
        ]);
    }
}
