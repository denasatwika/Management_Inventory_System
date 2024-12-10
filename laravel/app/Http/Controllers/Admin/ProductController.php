<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller  
{
    public function index() {
    
    $products = Product::with('category') -> get();
    $products = Product::with('status') -> get();

    return view('pages.product.index', [
        "products" => $products, 
    ]);
    }

    public function create() {
        $categories = Category::all();
        $statuses = Status::all();

        return view('pages.product.create', [
            "categories" => $categories,
            "statuses" => $statuses,
        ]);
        }

    public function store(Request $request) {

        $validatet = $request->validate([
            "name" => "required|string",
            "sku" => "required|string|unique:products",
            "stock" => "required|integer",
            "description" => "nullable|string",
            "category_id" => "required",
            "status_id" => "required",
        ]);

            Product::create([
                "name" => $request->input('name'),
                "sku" => $request->input('sku'),
                "stock" => $request->input('stock'),
                "description" => $request->input('description'),
                "category_id" => $request->input('category_id'),
                "status_id" => $request->input('status_id'),
            ]);
    
            return redirect('/product');
            
            }

            public function edit($id) {
                $categories = Category::all();
                $statuses = Status::all();
                $product = Product::findOrFail($id);
        
                return view('pages.product.edit', [
                    "categories" => $categories,
                    "statuses" => $statuses,
                    "product" => $product,
                ]);
                }
            
            public function update(Request $request, $id) {

                $validatet = $request->validate([
                    "name" => "required|string",
                    // "sku" => "required|string|unique:products",
                    "stock" => "required|integer",
                    "description" => "nullable|string",
                    "category_id" => "required",
                    "status_id" => "required",
                    ]);
            
                    Product::where('id', $id)->update([
                        "name" => $request->input('name'),
                        // "sku" => $request->input('sku'),
                        "stock" => $request->input('stock'),
                        "description" => $request->input('description'),
                        "category_id" => $request->input('category_id'),
                        "status_id" => $request->input('status_id'),
                        ]);
                
                        return redirect('/product');
                        
                        }
            

            public function delete($id) {
                $product = Product::where('id', $id);
                $product->delete();

                return redirect('/product');
            }


//         // Validasi input
//     $validatedData = $request->validate([
//         'name' => 'required|string|max:255',
//         'sku' => 'required|string|unique:products',
//         'stock' => 'required|integer',
//         'description' => 'nullable|string',
//         'category_id' => 'required|exists:categories,id',
//         'status' => 'required|in:available,unavailable,damaged', // Status harus sesuai
//     ]);

//     // Simpan data ke database
//     Product::create($validatedData);

//     // Redirect atau respon sukses
//     return redirect('/product')->with('success', 'Produk berhasil ditambahkan!');
// }
}