<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(10);
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        //Validasi Form
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'description' => 'nullable|string'
        ]);

        try {
            $categories = Category::firstOrCreate([
                'name' => $request->name
            ], [
                'description' => $request->description
            ]);
            return redirect()->back()->with(['success' => 'Kategori: ' . $categories->name . ' ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->back()->with(['success' => 'Kategori: ' . $categories->name . ' telah dihapus']);
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('categories.edit', compact('categories'));
    }
}
