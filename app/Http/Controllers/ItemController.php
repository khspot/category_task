<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function indexByCategory($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $items = $category->items()->get();
        return response()->json($items);
    }



    public function indexBySubcategory($id)
{
    $subcategory = SubCategory::find($id);

    if (!$subcategory) {
        return response()->json(['error' => 'Subcategory not found'], 404);
    }

    $items = $subcategory->items()->get();
    return response()->json($items);
}


public function throughSubCategories($id)
{
    $item = item::find($id);

    if (!$item) {
        return response()->json(['error' => 'Item not found'], 404);
    }

    $category = $item->subcategory->category;
    return response()->json($category);
}



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'description' => 'required|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'category_id' => 'required_without:sub_category_id|exists:categories,id',
        'sub_category_id' => 'required_without:category_id|exists:sub_categories,id',
    ]);

    $item = Item::create($data);

    return response()->json($item, 201);
}


public function show($id)
{
    $item = Item::with('category', 'subcategory')->find($id);

    if (!$item) {
        return response()->json(['error' => 'Item not found'], 404);
    }

    return response()->json($item);
}
    /*
     * Update the specified resource in storage.
     */

public function update(Request $request, $id)
{
    $item = Item::find($id);

    if (!$item) {
        return response()->json(['error' => 'Item not found'], 404);
    }

    $request->validate([
        'name' => 'max:255',
        'price' => 'numeric',
        'stock' => 'integer',
    ]);

    $item->update($request->only(['name', 'price', 'stock']));
    return response()->json($item, 200);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $item = Item::find($id);

    if (!$item) {
        return response()->json(['error' => 'Item not found'], 404);
    }

    $item->delete();
    return response()->json(null, 204);
}
}







