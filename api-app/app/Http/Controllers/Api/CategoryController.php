<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoryResource::collection(Category::paginate());
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->name;
        $request->validate([
            'name'=>"required|string|max:200"
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return response()->json([
            "status"=>"success",
            "message"=>"data added successfully",
            "data"=>$category],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,Request $request)
    {
        if($request->header('Authorization') && $request->header('Authorization') == "Bearer 123456789"){
            return new CategoryResource($category);
        }else{
            return response()->json(["code"=>"401","message"=>"unauthorized"],401);
        }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=>"required|string|max:200"
        ]);
        $category->name = $request->name;
        $category->save();

        return response()->json([
            "status"=>"success",
            "message"=>"data updated successfully",
            "data"=>$category],202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([],204);
    }
}
