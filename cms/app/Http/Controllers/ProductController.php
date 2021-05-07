<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Http\Requests\ProductCreateRequest;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::paginate();

        return ProductResource::collection($products);
    }

    public function show($id) {
        return new ProductResource(Product::find($id));
    }

    public function store(ProductCreateRequest $request) {

        $product = Product::create($request->only('title', 'description', 'image', 'price'));
        return response($product, 201);
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->update($request->only('title', 'description', 'image', 'price'));
        // const HTTP_ACCEPTED = 202;

        return response($product, 202);
    }

    public function destroy($id) {
        Product::destroy($id);
        // const HTTP_NO_CONTENT = 204;

        return response(null, 204);
    }
}
