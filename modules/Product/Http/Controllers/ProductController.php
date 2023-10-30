<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Product\Entities\Product;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Modules\Category\Entities\Category;
use Modules\Product\Http\Requests\ProductRequest;
use Illuminate\Contracts\Support\Renderable;
use Modules\Product\Http\Requests\UpdateProductRequest;
use Modules\Core\Http\Controllers\AppController;
use Modules\Core\Http\helpers;
class ProductController extends AppController
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $this->setMessages([
            //swal
            'swal-delete-prompt' => Lang::get('core::global.swal.swal-delete-prompt'),
            'swal-delete-prompt-single' => Lang::get('core::global.swal.swal-delete-prompt-single'),
            'swal-hard-delete-prompt' => Lang::get('core::global.swal.swal-hard-delete-prompt'),
            'swal-hard-delete-prompt-single' => Lang::get('core::global.swal.swal-hard-delete-prompt-single'),
            'swal-delete-btn-confirm' => Lang::get('core::global.swal.swal-delete-btn-confirm'),
            'swal-delete-btn-discard' => Lang::get('core::global.swal.swal-delete-btn-discard'),

            'swal-restore-prompt' => Lang::get('core::global.swal.swal-restore-prompt'),
            'swal-restore-prompt-single' => Lang::get('core::global.swal.swal-restore-prompt-single'),
            'swal-restore-btn-confirm' => Lang::get('core::global.swal.swal-restore-btn-confirm'),
            'swal-restore-btn-discard' => Lang::get('core::global.swal.swal-restore-btn-discard'),
        ]);
        return view('product::dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'POST',
            'dt_modal_submit_url' => route('product.store')
        ]);
        $categories = Category::all();
   
        return view('product::dashboard.modals.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();

        $photo=$request->photo;
        if($photo){
            $filename = time().'-'.$photo->getClientOriginalName();
            $path = base_path() . '/storage/app/public/product/img/';
            $photo->move($path, $filename);
            $data['photo']=$filename;
        }
        $product = Product::create($data);

        return response()->json(['message' => Lang::get('core::global.toastr.toastr-added-row')], 201);
    }



    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Product $product)
    {
        $this->setAjaxParams([
            'dt_modal_request_type' => 'PUT',
            'dt_modal_submit_url' => route('product.update', [$product->id]),
        ]);
        $categories = Category::all();

        return view('product::dashboard.modals.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->all();
        $photo=$request->photo;
        if($photo){
            $filename = time().'-'.$photo->getClientOriginalName();
            $path = base_path() . '/storage/app/public/product/img/';
            $photo->move($path, $filename);
            $data['photo']=$filename;
        }
        $product->update($data);

        return response()->json(['message' => Lang::get('core::global.toastr.toastr-updated-row')], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-row')], 200);
    }


    public function destroyMany(Request $request)
    {
        Product::destroy($request->ids);
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-deleted-rows')], 200);
    }
}
