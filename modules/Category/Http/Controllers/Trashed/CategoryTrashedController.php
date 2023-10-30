<?php

namespace Modules\Category\Http\Controllers\Trashed;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Modules\Category\Entities\Category;
use Modules\Core\Http\Controllers\AppController;

class CategoryTrashedController extends AppController
{

    public function destroy($id)
    {
        Category::withTrashed()->findOrFail($id)->forceDelete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-hard-deleted-row')], 200);
    }

    public function destroyMany(Request $request)
    {
        Category::withTrashed()->whereIn('id',$request->ids)->forceDelete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-hard-deleted-rows')],200);
    }

    public function restore($id)
    {
        Category::withTrashed()->findOrFail($id)->restore();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-restored-row')], 200);
    }

    public function restoreMany(Request $request)
    {
        Category::withTrashed()->whereIn('id',$request->ids)->restore();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-restored-rows')],200);
    }
}
