<?php

namespace App\Http\Controllers\Site;

use Cart;
use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\Contracts\AttributeContract;
use DB;


use App\Http\Requests;

use App\Models\Support\Booking;
use \Illuminate\Http\Response;
use Illuminate\Validation\Rule;

use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    protected $productRepository;

    protected $attributeRepository;

    public function __construct(ProductContract $productRepository, AttributeContract $attributeRepository)
    {
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
    }

    public function show($slug)
    {
        $product = $this->productRepository->findProductBySlug($slug);
        $attributes = $this->attributeRepository->listAttributes();

        return view('site.pages.product', compact('product', 'attributes'));
    }

    public function addToCart(Request $request)
    {


        $product = $this->productRepository->findProductById($request->input('productId'));
        $options = $request->except('_token', 'productId', 'price', 'qty');

        Cart::add(uniqid(), $product->name, $request->input('price'), $request->input('qty'), $options);

         $data = $request->input();

        $tamt = $request->input('price')*$request->input('qty');
        $status = "N";
         // 'pickuppoint', 'pmsg', 'route', 'amt', 'email', 'status', 'regno', 'phone
            try{
                $booking = new Booking;

                $booking->pickuppoint = $data['ppoint'];
                $booking->pmsg = $data['pmsg'];
                $booking->route = $data['route'];
                $booking->amt = $data['sno'];
                $booking->email = $data['email'];
                $booking->status = $status;
                $booking->regno = $data['regno'];
                $booking->phone = $data['phone'];
                $booking->pnumber = $data['qty'];
                $booking->tamt = $tamt;
                $booking->save();
                Toastr::success('Booked successfully :)','Success');
                // return back();
            }
            catch(Exception $e){
                Toastr::success('Operation failed :)','Error');
                // return back();
            }


        return redirect()->back()->with('message', 'Item added to cart successfully.');
    }
}
