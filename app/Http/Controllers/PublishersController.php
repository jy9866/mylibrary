<?php
namespace App\Http\Controllers;

use App\Publisher;
use App\Http\Requests\PublisherRequest;
use App\Http\Resources\PublisherCollection;
use App\Http\Resources\PublisherResource;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PublishersController extends Controller
{
  public function index(Request $request)
  {
    $publishers = Publisher::orderBy('name','asc')->get();
      return view('/admin/publisher/index',['publishers' => $publishers]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
			'name' => 'required|max:30',
			'address' => 'required|max:200',
			'email'=> "required|string|email|max:255",
			]);
		$publisher = new Publisher();
		$publisher->fill($request->all());
		$publisher->save();

      	return redirect()->route('publisher.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      try {
          $publisher = Publisher::with('books')->find($id);
          if(!$publisher) throw new ModelNotFoundException;

          return new PublisherResource($publisher);
      }
      catch(ModelNotFoundException $ex) {
          return response()->json([
              'message' => $ex->getMessage(),
          ], 404);
      }
  }

  /**
   * Update the specified resource in storage.
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $request->validate([
			'name' => 'required|max:30',
			'address' => 'required|max:200',
			'email'=> "required|string|email|max:255",
			]);

      $publisher = Publisher::find($id);
        if(!$publisher) throw new ModelNotFoundException;

         $publisher->fill($request->all());
         $publisher->save();

         return redirect()->route('publisher.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $publisher = Publisher::findOrFail($id);
    $publisher->delete();
    return redirect()->route('publisher.index')->with(['message'=> 'Successfully deleted!!']);
  }

  public function edit($id){
		$publisher = Publisher::find($id);
		if(!$publisher) throw new ModelNotFoundException;

		return view('/admin/publisher/edit', ['publisher'=> $publisher]);
	}

  public function create(){
    $publisher = new Publisher();

		return view('/admin/publisher/create', ['publisher' => $publisher,]);
  }
}
