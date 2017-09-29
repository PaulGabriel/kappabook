<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use Session;
use App\Wishlist;

class WishlistController extends Controller
{
    public function getAddToWish(Request $request, $id){
        $product = Product::find($id);
        $oldWish = Session::has('wish') ? Session::get('wish'): null;
        $wish = new Wishlist($oldWish);
        $wish->add($product, $product->id);

        $request->session()->put('wish', $wish);
        return redirect()->route('product.index');
    }

    public function getWish(){
        if(!Session::has('wish')){
            return view('shop.wishlist');
        }
        $oldWish = Session::get('wish');
        $wish = new Wishlist($oldWish);
        $total = $wish->totalPrice;
        $count = count($wish->items);
        Session::put('wish', $wish);
        return view('shop.wishlist', ['products' => $wish->items, 'totalPrice' => $wish->totalPrice, 'total' => $total, 'count' => $count]);
    }

    public function getRemoveWish($id) {
        $oldWish = Session::has('wish') ? Session::get('wish') : null;
        $wish = new Wishlist($oldWish);
        $wish->removeItem($id);
            if (count($wish->items) > 0) {
                Session::put('wish', $wish);
            } 
            else {
                Session::forget('wish');
            }
        return redirect()->route('product.Wishlist');
    }
    
}
