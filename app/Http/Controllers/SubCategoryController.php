<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Item;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $subcategories = $category->subcategories;
        return response()->json($subcategories);
    }


    public function store(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $subcategory = $category->subcategories()->create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return response()->json($subcategory, 201);
    }

    public function update(Request $request, $id)
    {
        $subcategory = Subcategory::find($id);

        if (!$subcategory) {
            return response()->json(['error' => 'Subcategory not found'], 404);
        }

        $request->validate([
            'name' => 'max:255',
            'description' => 'nullable',
        ]);

        $subcategory->update($request->only(['name', 'description']));

        return response()->json($subcategory, 200);
    }

    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);

        if (!$subcategory) {
            return response()->json(['error' => 'Subcategory not found'], 404);
        }

        $items = Item::where('Sub_category_id', $id)->get();
        foreach ($items as $item) {
            $item->category_id = $subcategory->category_id;
            $item->Sub_category_id = null;
            $item->save();
        }

        $subcategory->delete();
        return response()->json(null, 204);
    }

}
