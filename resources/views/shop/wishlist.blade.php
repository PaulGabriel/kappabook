@extends('layouts.master')

@section('title')
   WishList
@endsection

@section('styles')
 <link rel="stylesheet" href="{{ URL::to('src/css/checkout.css') }}">
@endsection

@section('content')
    @if(Session::has('wish'))
     <h3>Wishlist</h3> 
    <p>You've got {{ Session::has('wish')  ? Session::get('wish')->totalQty : '' }} items in the wishlist</p>
    
    <div class="container">
	<div class="row">
    
		<div class="col-lg-12">
				<div class="panel-body">
                  @foreach($products as $product)
					<div class="row">
						<div class="col-xs-2"> <img width="70" height="90" src="{{ $product['item']['imagePath'] }} ">
						</div>
						<div class="col-xs-4">
							<a href="{{ route('shop.product', ['id' => $product['item']['id'] ]) }}"><h4 class="product-name"><strong>{{ $product['item']['title']}}</strong></h4><h4><small>{{ $product['item']['category'] }}</small></h4></a>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><span class="text-muted">{{ $product['qty'] }} x</span><strong class="price">${{ $product['price'] }}</strong></h6>
							</div>
							<div class="col-xs-4">
                            <a href="{{ route('product.addToCart', ['id' => $product['item']->id ]) }}">
								<button type="button" class="btn btn-success btn-md btn-block">
									<span class="fa fa-shopping-cart"></span> &nbsp;Add to cart
								</button>
                            </a>
							</div>
							<div class="col-xs-2">
                                <a href="{{ route('product.removeWish', ['id' => $product['item']->id ]) }}">
								<button type="button" class="btn btn-link btn-md">
									<i class="fa fa-trash-o fa-2" aria-hidden="true" style="text-decoration: none; color: black; "></i>
								</button>
                                </a>
							</div>
						</div>
                    
					</div>
                    <hr>
                        @endforeach
		
					<div class="row">
						<div class="col-xs-3 col-xs-offset-8">
							<h4 class="text-right">Total: <strong>${{ $total }}</strong></h4>
						</div>
                    
				</div>
			</div>
		</div>
	</div>
</div>

  @else
    <div class="row"> 
        <div class="col-lg-12 text-center" style="margin-top: 250px">
        <span class="text-center"><img src="https://cdn4.iconfinder.com/data/icons/cloud-computing-2/500/cloud-question-mark-128.png"></span>
         <h3>Your wishlist is empty!</h3>
         <p>In order to add items to your wishlist please go back to the store</p> <br>
            <a href="{{ route('product.index') }}">
                <button type="button" class="btn btn-default btn-md">
                   <i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp; Back to store
                </button>
            </a>
        </div>
    </div>
    @endif
   
@endsection
