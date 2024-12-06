<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class adminController extends Controller
{
    //

    public function index()
    {


        $categorizedProducts =  $this->productsWithLinks();
         $products = collect($categorizedProducts)->groupBy('category');

        //$products =  $categorizedProducts->get('GAMING CHAIR', collect());
        



        return view('admin',
        [
            'products' => $products
            ] );
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'product_name' => 'required|string|max:255',
        'category_id' => 'required|numeric',
        'brand' => 'required|string|max:255',
    ]);

    $product = Products::create($validatedData);

    // Flash a success message to the session
    return redirect()->back()->with('success', 'Product has been successfully added.');
}



    public function destroy($categoryId, $productId)
{
    // Find the product by product_id and category_id
    $product = Products::where('category_id', $categoryId)
                       ->where('product_id', $productId)
                       ->first();

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    $product->delete();

    return response()->json(['message' => 'Product deleted successfully'], 200);
}


    private function fetchProductsLinks()
    {


        $products = Products::select('product_id', 'product_name', 'brand', 'category_id')
            ->with([
                'productLinks' => function ($query) {
                    $query->select('link_id', 'price', 'url', 'product_id');
                },
                'productCategories' => function ($query) {
                    $query->select('category_name', 'category_id');
                }
            ])
            // ->groupBy('')
            ->get();


        return $products;
    }

    private function productsWithLinks()
    {


        $products = $this->fetchProductsLinks();



        $productArray = [];

        foreach ($products as $product) {
            $links = []; // Initialize links array for this product

            // Iterate over the product links
            foreach ($product->productLinks as $link) {
                $links[] = [
                    'url' => $link->url,
                    'price' => $link->price,
                ];
            }

            // Add the product and its details to the array
            $productArray[] = [
                'product_name' => $product->product_name,
                'brand' => $product->brand,
                'category' => $product->productCategories->category_name ?? null,
                 'category_id' => $product->category_id, // Handle potential null values
                'links' => $links, // Attach the links array
            ];
        }


        return $productArray;

        //   dd($products); 




    }
}
