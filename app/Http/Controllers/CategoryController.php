<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\item;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(8); // 8 categories per page
        return response()->json($categories);
    }
    public function indexItems()
    {
        $categories = Category::with('throughitems')->paginate(8); // 8 categories per page
        return response()->json($categories);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $category = Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return response()->json($category, 201);
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $request->validate([
            'name' => 'max:255',
            'description' => 'nullable',
        ]);

        $category->update($request->only(['name', 'description']));

        return response()->json($category, 200);
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $items = Item::where('category_id', $id)->get();

        foreach ($items as $item) {
            $item->delete();
        }

        $category->delete();
        return response()->json(null, 204);
    }

}
