<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;



class ListingController extends Controller
{
    //show all listing
     public function index(){
        return view('listings.index',
   [
    'listings' => Listing::latest()->filter(request(['tag','search']))->paginate(5)
   ]);

}
    //show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    public function create()
    {
    return view('listings.create');
}
//store listing data
 public function store(Request $request)
{
    $formFields = $request->validate([
       'title' => 'required',
       'company' => ['required', Rule::unique('Listings', 'company')],
       'location' => 'required',
       'website' => 'required',
       'email' => ['required', 'email'],
       'tags' => 'required',
       'description' => 'required'
    ]);
if($request->hasFile('logo'))
{
$formFields['logo'] = $request->file('logo')->store('logos','public');
}

 // To know which user created the listing
 $formFields['user_id'] = Auth::id();


 Listing::create($formFields);

 return redirect('/')->with('message', 'Listing created successfully');
}
//show edit form

public function edit(Listing $listing)
{
return view('listings.edit', ['listing' => $listing]);
}

//update
public function update(Request $request, Listing $listing)
{
   // Authorization
   if ($listing->user_id != Auth::id()) {
    abort(403, 'Unauthorized Action');
}
    $formFields = $request->validate([
       'title' => 'required',
       'company' => ['required'],
       'location' => 'required',
       'website' => 'required',
       'email' => ['required', 'email'],
       'tags' => 'required',
       'description' => 'required'
    ]);
if($request->hasFile('logo'))
{
$formFields['logo'] = $request->file('logo')->store('logos','public');
}

    $listing->update($formFields);
    return back()->with('message', 'Listing updated successfully');

}
//delete listing

public function destroy(Listing $listing)
{
    // Authorization
   if ($listing->user_id != Auth::id()) {
    abort(403, 'Unauthorized Action');
}
$listing->delete();
return redirect('/')->with('message', 'Listing deleted successfully');
}

public function manage()
{
    return view('listings.manage', [
        'listings' => \App\Models\User::find(Auth::id())->listings()->get()
    ]);
}

}