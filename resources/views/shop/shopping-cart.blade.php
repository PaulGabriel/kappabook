@extends('layouts.master')

@section('title')
    Shopping Cart
@endsection

@section('styles')
 <link rel="stylesheet" href="{{ URL::to('src/css/checkout.css') }}">
@endsection

@section('content')
    @if(Session::has('cart'))
     <h3>Cart</h3> 
    <p>You've got {{ Session::has('cart')  ? Session::get('cart')->totalQty : '' }} items in the cart</p>

    
    <div class="container">
	<div class="row">
    
		<div class="col-lg-12">
				<div class="panel-body">
        <form method="post">
                  @foreach($products as $product)
					<div class="row">
						<div class="col-xs-2"> <img width="70" height="90" src="{{ $product['item']['imagePath'] }} ">
						</div>
						<div class="col-xs-4">
						<input type="hidden" name="title" id="title" value=" <a href="{{ route('shop.product', ['id' => $product['item']['id'] ]) }}"><h4 class="product-name"><strong>{{ $product['item']['title']}}</strong></h4></a>">
                           
                        </input>
                            <h4><small>{{ $product['item']['category']}}</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-center">
								<h6><span class="text-muted">{{ $product['qty'] }} x</span><strong class="price">{{ $product['price'] }}€</strong></h6>
							</div>
						<div class="col-xs-4">
                           <div class="input-group">
                        <span class="input-group-btn">
                         <a href="{{ route('product.ReduceByOne', ['id' => $product['item']['id']]) }}">
                            <button type="button" class="btn btn-qty">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </a>
                        </span>
                        <input type="text" class="form-control qty text-center" value="{{ $product['qty'] }}"></input>
                        <span class="input-group-btn">
                        <a href="{{ route('product.addQty', ['id' => $product['item']['id']]) }}">
                            <button type="button" class="btn btn-qty">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </a>
                        </span>
                    </div>
							</div>
							<div class="col-xs-2">
                                <a href="{{ route('product.removeItem', ['id' => $product['item']->id ]) }}">
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
						<div class="col-xs-3 col-xs-offset-6">
							<h4 class="text-right">Total: <strong>{{ $total }}€</strong></h4>
						</div>
                        	<div class="col-xs-2 ">
                            <a href="{{ route('checkout.create') }}">
							<button type="button" class="btn btn-success btn-block">
								Checkout
							</button>
                            </a>
						</div>
				</div>
			</div>
		</div>
        </form>
	</div>
</div>


    @else
     <div class="row"> 
        <div class="col-lg-12 text-center" style="margin-top: 250px">
        <span class="text-center"><img src="https://cdn4.iconfinder.com/data/icons/cloud-computing-2/500/cloud-basket-128.png"></span>
         <h3>Your shopping cart is empty!</h3>
         <p>In order to add items to the cart please go back to the store</p> <br>
            <a href="{{ route('product.index') }}">
                <button type="button" class="btn btn-default btn-md">
                   <i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp; Back to store
                </button>
            </a>
        </div>
    </div>
    @endif

   
@endsection
