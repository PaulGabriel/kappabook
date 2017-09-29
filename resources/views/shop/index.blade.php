@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')

<!---
<section class="new-books">
  <div class="container">
	<div class="row">
		<div class="span12">
    	    <div class="well"> 
                <div id="myCarousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
                 
                <!-- Carousel items
                <div class="carousel-inner">
              
                <div class="item active">
                	<div class="row-fluid">
                    
                	<div class="col-md-4 text-center">
                        <img class="img-center" src="http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-7XZL-jumbo-v2-290x370-1.jpg" alt="">
                        <br>
                         <h3>Latte Macchiato</h3>
                         <p id="pret">8 RON</p>
                    </div>
                	<div class="col-md-4 text-center">
                          <img class="img-center" src="http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-7XZL-jumbo-v2-290x370-1.jpg" alt="">
                         <br>
                         <h3>Cafea Lunga</h3>
                         <p id="pret">5 RON</p>
                    </div>
                	<div class="col-md-4 text-center">
                        <img class="img-center" src="http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-7XZL-jumbo-v2-290x370-1.jpg" alt="">
                         <br>
                         <h3>Irish Coffee</h3>
                         <p id="pret">9 RON</p>
                    </div>
                	  
                	</div>
                </div>
                 
                 <div class="item">
                	<div class="row-fluid">
                	<div class="col-md-4 text-center">
                <img class="img-center" src="http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-9THC-jumbo-v2-290x370.jpg" alt="">
              <br>
                <h3>Frappuccino</h3>
                <p id="pret">10 RON</p>
            </div>
                	<div class="col-md-4 text-center">
                <img class="img-center" src="http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-9THC-jumbo-v2-290x370.jpg" alt="">
              <br>
                <h3>Bicerin</h3>
                <p id="pret">9 RON</p>
            </div>
                	<div class="col-md-4 text-center">
                <img class="img-center" src="http://localhost/wordpress/wp-content/uploads/2015/01/14BESTCOVERS-slide-9THC-jumbo-v2-290x370.jpg" alt="">
              <br>
                <h3>Tiramisu</h3>
                <p id="pret">10 RON</p>
            </div>
                	  
                	</div><
                </div><

                </div><
                 
                </div>
                 
            </div> 
		</div>
	  </div>
    </div>
</section>
-->

  <div class="container">

  @foreach($products->chunk(3) as $productChunk)
      <div class="row">
  @foreach($productChunk as $product)
	  
		<div class="col-xs-4 col-sm-4 col-md-4 ">
              <div class="thumbnail">
                <img src="{{ $product->imagePath }}" alt="">
                <div class="caption">
                  <div class="pull-right">
                  <br>
                  
                     <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="fa fa-plus add" data-toggle="tooltip" data-placement="left" title="ADD TO CART"></a>
                     
                     <a href="{{ route('product.addToWish', ['id' => $product->id]) }}" class="fa fa-heart wish" data-toggle="tooltip" data-placement="left" title="ADD TO WISHLIST"></a>
                    
                  </div>
                  <div class="infos">
                  <a href="{{ route('shop.product', ['id' => $product->id]) }}"><h3>{{ $product->title }}</h3></a>
                  <p> 
                    <a href="@if( $product->category === 'History') 
                                    {{ route('category.history') }}
                            @elseif($product->category === 'Action')
                                {{ route('category.action') }}
                            @elseif($product->category === 'Fantasy')
                                {{ route('category.fantasy') }}
                            @elseif($product->category === 'Adventure')
                                {{ route('category.adventure') }}
                            @elseif($product->category === 'Romance')
                                {{ route('category.romance') }}
                            @endif" class="category">
                    {{ $product->category }}
                    </a>
                  </p>
                 <div class="rating">
                @if( $product->review()->avg('review') >= 1 && $product->review()->avg('review') < 2 )
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                    @elseif( $product->review()->avg('review') >= 2 && $product->review()->avg('review') < 3 )
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                    @elseif( $product->review()->avg('review') >= 3 && $product->review()->avg('review') < 4 )
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                    @elseif( $product->review()->avg('review') >= 4 && $product->review()->avg('review') < 5 )
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                    @elseif( $product->review()->avg('review') >= 5 )
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                    @else
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                @endif
           
                    </div>
                </div>
                <div class="price">
                    <p>{{ $product->price }} EUR</p>
                </div>
                
              </div>
            </div>
        </div>
        

        @endforeach
   </div>

    
@endforeach

</div>
</div>

@include('layouts.index-footer');


<!-- cart items count
<div class="cd-cart-container empty">
	<a href="{{ route('product.shoppingCart') }}" class="cd-cart-trigger">
		Cart
		<ul class="count"> 
			<li>0</li>
			<li>0</li>
		</ul> 
	</a>

	<div class="cd-cart">
		<div class="wrapper">
		
			
		</div>
	</div> 
</div> <!- cd-cart-container -->



@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script type="text/javascript" src="{{ URL::to('src/js/main.js') }}"></script>
@endsection

