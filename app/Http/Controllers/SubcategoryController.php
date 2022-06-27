<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Product;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        $category = new category();
        $subcategory = new subcategory();
        if ($req->category != null) {
            $category->category = $req->category;
            $category->save();
        }
        if ($req->subcategory != null) {
            $subcategory->id_category = $req->old_category;
            $subcategory->sub_category = $req->subcategory;
            $subcategory->save();
        }

        return back()->with('notice', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $check = subcategory::find($id);
        $filter = product::where('id_subcategory', $id)->orWhere('id_relate', 'like', "%$id%")->paginate(30);
        if (isset($check->id_subcategory)) {
            return view("shop.filter", ['filter' => $filter, 'check' => $check]);
        } else {
            header('location:/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sub = subcategory::find($id);
        $sub->delete();
        return back()->with('notice', 'Đã xóa loại sản phẩm');
    }
}
