<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\products\ProdRequest;
use App\Http\Requests\products\ProdRequestEdit;
use Illuminate\Support\Str;

class ProductController extends Controller
{
   public function index(Request $request)
        {
            $q = $request->q;
            $category = $request->category;
            $active = $request->active;
    
            $query = product::whereRaw('true');
            
            if($active!=''){
                $query->where('active',$active);
            }
    
            if($category){
                $query->where('category_id',$category);
            }
            
            if($q){
                $query->whereRaw('(title like ? or slug like ?)',["%$q%","%$q%"]);
            }
    
            
            $products = $query->paginate(8)
            ->appends([
                'q'     =>$q,
                'category'=>$category,
                'active'=>$active
            ]);
    
            $categories = category::all();
            return view("admin.product.index",compact('products','categories')); 
            
           
        }
         /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = product::all();
        $categories = category::all();
        return view("admin.product.create",compact('products','categories'));
        
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdRequest $request)
    {
        $fileName = $request->image->store("public/assets/img"); 
        $imageName = $request->image->hashName();
        
        $requestData = $request->all();
        //$requestData['slug'] = Str::slug($requestData['title']);
        
        $requestData['main_image'] = $imageName;
        $requestData['images'] = "1";
        
        product::create($requestData);
        Session::flash("msg","s: ?????? ?????????????? ??????????");
        return redirect(route("products.index"));        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::find($id);
        if(!$product){
            session()->flash("msg","w: ?????????????? ?????? ????????");
            return redirect(route("products.index"));
        }
        return view("admin.product.show",compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::find($id);
        if(!$product){
            session()->flash("msg","e:?????????????? ?????? ????????");
            return redirect(route("products.index"));
        }
        
        $categories = category::all();
        return view("admin.product.edit",compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(prodRequestEdit $request, $id)
    {
        $productDB = product::find($id);
        $request['slug'] = Str::slug($request['title']);
        $request['images'] = "2";
        if($request['main_image']){            
            $requestData = $request->all();
            $fileName = $request->main_image->store("public/assets/img");
            $imageName = $request->main_image->hashName();
            $requestData['main_image'] = $imageName;            
            $productDB->update($requestData);
        }
        else{
            
            product::where('id', $id)->update(array('title' => $request['title'],
                                                     'quantity'=> $request['quantity'],
                                                     'category_id'=> $request['category_id'],
                                                     'regular_price'=> $request['regular_price'],
                                                     'sale_price'=> $request['sale_price'],
                                                     'details'=> $request['details'],
                                                     'slug'=> $request['slug'],
                                                     'active'=> $request['active']
                                                    ));
        }
        
        
        session()->flash("msg","s:???? ?????????? ???????????? ??????????");
        return redirect(route("products.index"));

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("products")->where("id",$id)->delete();
        session()->flash("msg","w:???? ?????? ???????????? ??????????");
        return redirect(route("products.index"));
    }
        
}
