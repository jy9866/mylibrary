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
  public function store(PublisherRequest $request)
  {
      try {
          $publisher = new Publisher;
          $publisher->fill($request->all());

          $publisher->saveOrFail();

          return response()->json([
              'id' => $Publisher->id,
              'created_at' => $Publisher->created_at,
          ], 201);
      }
      catch(QueryException $ex) {
          return response()->json([
              'message' => $ex->getMessage(),
          ], 500);
      }
      catch(\Exception $ex) {
          return response()->json([
              'message' => $ex->getMessage(),
          ], 500);
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
  public function update(PublisherRequest $request, $id)
  {
      try {
          $Publisher = Publisher::find($id);
          if(!$Publisher) throw new ModelNotFoundException;

          $Publisher->fill($request->all());

          $Publisher->saveOrFail();

          return response()->json(null, 204);
      }
      catch(ModelNotFoundException $ex) {
          return response()->json([
              'message' => $ex->getMessage(),
          ], 404);
      }
      catch(QueryException $ex) {
          return response()->json([
              'message' => $ex->getMessage(),
          ], 500);
      }
      catch(\Exception $ex) {
          return response()->json([
              'message' => $ex->getMessage(),
          ], 500);
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
    $publisher = Publisher::findOrFail($id);
    $publisher->delete();
    return redirect()->route('/publisherindex')->with(['message'=> 'Successfully deleted!!']);
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
