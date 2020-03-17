<?php

namespace App\Http\Controllers;

use App\BatteryType;
use App\Category;
use App\Brand;
use App\GearBox;
use App\Product;
use App\Volts;
use App\Weight;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(12);
        $category = Category::get();
        $brands = Brand::get();
        $battery = BatteryType::get();
        $gearBox = GearBox::get();
        $volts = Volts::get();
        $weight = Weight::get();
        return view(
            'user.shop',
            compact(
                'products',
                'brands',
                'category',
                'battery',
                'gearBox',
                'volts',
                'weight'
            )
        );
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        $products = Product::where('category_id', $category)->get();
        $brands = Brand::get();
        $battery = BatteryType::get();
        $gearBox = GearBox::get();
        $volts = Volts::get();
        $weight = Weight::get();
        return view(
            'user.category',
            compact(
                'products',
                'brands',
                'category',
                'battery',
                'gearBox',
                'volts',
                'weight'
            )
        );
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
