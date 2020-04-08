<?php

use App\Author;
use App\Http\Requests\AuthorRequest;
use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AuthorController extends Controller
{
  public function index(Request $request)
  {
      $name = $request->input('name');

      $author = Author::with('books')
          ->when($name, function($query) use($name) {
              return $query->where('name', 'like', "%$name%");
          ->when($address, function($query) use($address) {
                  return $query->where('address', 'like', "%$address%");
          ->when($email, function($query) use($email) {
                  return $query->where('email', 'like', "%$email%");
          })

      return new AuthorCollection($Author);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(AuthorRequest $request)
  {
      try {
          $author = new Author;
          $author->fill($request->all());

          $author->saveOrFail();

          return response()->json([
              'id' => $author->id,
              'created_at' => $author->created_at,
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
          $author = Author::with('books')->find($id);
          if(!$Author) throw new ModelNotFoundException;

          return new AuthorResource($Author);
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
  public function update(AuthorRequest $request, $id)
  {
      try {
          $author = Author::find($id);
          if(!$author) throw new ModelNotFoundException;

          $author->fill($request->all());

          $author->saveOrFail();

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
      //
  }
}
