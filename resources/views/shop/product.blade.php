@extends('layouts.master')

@section('title')
    KappaBook - {{$product->title}}
@endsection

@section('content')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4"> 
            <img src="{{ $product->imagePath }}" width="400" height="550">
        </div>

        <div class="col-md-6 dreapta col-md-offset-1">
            <h1> {{ $product->title }}</h1>
            <h4 class="text-muted"> {{ $product->category }}</h4> 
          <br>
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
                <a href="#review-id" class="text-muted">({{$product->review()->count('review') }} customer reviews)</a>
            <br><br>
            <p>{{ $product->description }}</p>
            <hr>
            <h2>{{ $product->price }} EUR</h2><p><i class="fa fa-check"></i> In stock</p>
            <br><br>

            <div class="col-md-4">
                <span class="input-group">
                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}">
                        <button type="button" class="btn btn-success" style="padding: 15px; width: 250px; border-radius: 20px; background-color: #089FEE; color: white">
                        <span class="fa fa-shopping-cart"></span>
                        &nbsp; &nbsp;Add to cart</button>
                    </a>
                </span>
            </div>
            <div class="col-md-4 col-md-offset-2">
             
                <span class="input-group">
                    <a href="{{ route('product.addToWish', ['id' => $product->id]) }}"><button type="button" class="btn btn-success"  style="padding: 15px; width: 250px; border-radius: 20px; background: transparent; border: 1px solid #089FEE; color: #089FEE;">
                        <span class="glyphicon glyphicon-heart"></span>&nbsp; &nbsp;Add to wishlist</button>
                    </a>
                </span>
            </div>
                       </div>
            
            <br><br>
            
    
</div>
</div>
 <br><br> <br><br><br><br><br>
<div class="col-lg-12">
    <div class="block-policy block">
        <div class="block-policy-content">
            <div class="col-xs-6 col-md-3" style="border-right: 1px solid #e6e6e6;">
                <div class="pull-top" style="text-align: center;"><img src="https://cdn2.iconfinder.com/data/icons/shop-payment-vol-6/128/shop-22-128.png" alt="Free Delivery" width="128" height="128"></div>
                <br>
                    <div class="media-body" style="text-align: center;">
                        <h4>Livrare gratuita</h4>
                        <p>Pentru abonamentele Duo48, Tribe64+ si comenzile mai mari de 150 lei.</p>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3" style="border-right: 1px solid #e6e6e6;">
                    <div class="pull-top" style="text-align: center;"><img title="30 days return" src="https://cdn2.iconfinder.com/data/icons/shop-payment-vol-6/128/shop-02-128.png" alt="30 days return" width="128" height="128"></div>
                    <br>
                        <div class="media-body" style="text-align: center;">
                            <h4>30 zile retur gratuit</h4>
                            <p>Ne ocupam noi de toate detaliile.</p>
                        </div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                        <div class="col-xs-6 col-md-3" style="border-right: 1px solid #e6e6e6; float: right;">
                            <div class="pull-top" style="text-align: center;"><a href="/aparate"><img src="https://cdn2.iconfinder.com/data/icons/shop-payment-vol-6/128/shop-11-128.png" alt="High Tech Machines" width="128" height="128"></a></div>
                            <br>
                                <div class="media-body" style="text-align: center;">
                                    <h4>Aparate de ultima generatie</h4>
                                    <p>Cu precizie elvetiana...</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3" style="float: left">
                                <div class="pull-top" style="text-align: center;"><img src="https://cdn2.iconfinder.com/data/icons/shop-payment-vol-6/128/shop-24-128.png" alt="Always within reach" width="128" height="128">
                               
                                    <div class="media-body" style="text-align: center;">
                                     <br>
                                        <h4>Mereu la indemana</h4>
                                        <p>Ne poti contacta prin email, social media sau la telefon. Tu alegi!</p>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block"></div>
                                </div>
                            </div>
                        </div>  
                    </div>

<div class="row">
    <div class="col-md-12">
    <br><br><br><br>

        <div class="tabs">
		<ul class="nav nav-tabs">
        
				<li class="nav active">
					<a href="#tab-reviews" data-toggle="tab">Reviews</a>
            
				</li>
                
                <li class="nav">
					<a href="#tab-specifications" data-toggle="tab">Specifications</a>
				</li>


					</ul>

		<div class="tab-content">
			<div role="tabpanel" class="entry-content in fade tab-pane active" id="tab-reviews">
               @if( Auth::user())   
				<div id="reviews">
		            <div id="review_form_wrapper">
			            <div id="review_form">
					        <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Review „{{ $product->title }}” <small>
                                    <a rel="nofollow" id="cancel-comment-reply-link" href="/wordpress/product/cant-and-wont/#respond" style="display:none;">Cancel reply</a></small></h3>	
                            <form action="{{ route('review.create') }}" method="post">
                                 <div class="row">	
                                    <div class="col-sm-6">
                                     <div class="form-group">
                                        <input id="title" name="title" type="text" class="form-control" placeholder="Title" value="" size="30" required="required">     
                                     
                                        <input id="username" name="username" type="hidden" class="form-control"  value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}">
                                        <input id="product_id" name="product_id" type="hidden" class="form-control"  value="{{ $product->id }}">
                                       
                                    </div>
                                   </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <input id="review" name="review" type="number" class="form-control" placeholder="Rating / 5" min="1" max="5" required="required">
                            </div>
                        </div>
        </div>
        <textarea id="body" name="body" cols="45" rows="8" required="required" class="form-control autogrow" min="5" placeholder="Your Review" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 174px;"></textarea>
        <br>
    </div>
                    <span class="input-grup-btn">
                            <button type="submit" class="btn btn-success pull-right">
                                Submit review
                            </button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </span>		
  </form>
    

			</div><!-- #respond -->
			</div>
		</div>
               @endif
        <br><br>
 
 <div id="review-id">
<h2>Reviews</h2>
<hr>

<div class="container">

    @foreach($reviews as $review)
        @if($product->id === $review->product_id)
    <div class="row" style="padding-bottom: 50px;">
           <div class="col-md-2">
                <div class="thumbnail" style="padding-top: 0px !important;">
                    <span class="ini"> <img class="img-responsive img-circle" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" width="74" height="74"></span>             
                    </div>

                <div class="product-review-user-meta">
                    <p class="small">Review adaugat de</p>
                    <p class="strong"><strong>{{ $review->username }}</strong></p>
                    <p class="small">{{ $review->created_at }}</p>
                    <p class="text-success"><i class="fa fa-check-circle font-size-md"></i> Product bought</p>
                </div>
            </div>
            <div class="col-md-10">
                <h4 style="text-transform: capitalize;" >{{ $review->title }}</h4>
                  <div class="rating">

                @if($review->review === 1)
                    <span class="fa fa-star" style="color: #FFD700;"></span>
                    @elseif($review->review === 2)
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span> 
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                                             
                    @elseif($review->review === 3)
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span> 
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>

                    
                    @elseif($review->review === 4)
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #FFD700;"></span>
                        <span class="fa fa-star" style="color: #e8e8e8;"></span>
                    @else
                         <span class="fa fa-star" style="color: #FFD700;"></span>
                         <span class="fa fa-star" style="color: #FFD700;"></span>
                         <span class="fa fa-star" style="color: #FFD700;"></span>
                         <span class="fa fa-star" style="color: #FFD700;"></span>
                         <span class="fa fa-star" style="color: #FFD700;"></span>
                    
                @endif
            </div>
            <br>
                <p>{{ $review->body }}</p>
            </div>
    </div>
    <hr>
        @endif
    @endforeach
</div><!-- /container -->
</div>
    </div>

<!-- TAB 2 -->
<br>

                <div role="tabpanel" class="entry-content in fade tab-pane" id="tab-specifications">
				    <div id="reviews">
		                <div id="review_form_wrapper">
			                <div class="panel-body">

					    <div class="row">
						    <div class="col-xs-2">
                                <p class="text-muted">Year</p>
						    </div>
                            <div class="col-xs-4 col-md-offset-4">
                                <p>{{ $product->year }}</p>
						    </div>
						</div>
                        <hr>
                        <div class="row">
						    <div class="col-xs-2">
                                <p class="text-muted">Publisher</p>
                             
						    </div>
                            <div class="col-xs-4 col-md-offset-4">
                                <p>{{ $product->publisher }}</p>
						    </div>
						</div>
                        <hr>
                        <div class="row">
						    <div class="col-xs-2">
                                <p class="text-muted">Number of pages</p>
                             
						    </div>
                            <div class="col-xs-4 col-md-offset-4">
                                <p>{{ $product->pages }}</p>
						    </div>
						</div>
                        <hr>
                         <div class="row">
						    <div class="col-xs-2">
                                <p class="text-muted">Category</p>
                             
						    </div>
                            <div class="col-xs-4 col-md-offset-4">
                                <p>{{ $product->category }}</p>
						    </div>
						</div>
                        <hr>
                         <div class="row">
						    <div class="col-xs-2">
                                <p class="text-muted">Language</p>
                             
						    </div>
                            <div class="col-xs-4 col-md-offset-4">
                                <p>{{ $product->language }}</p>
						    </div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
    </div>
<br><br><br>
<div class="clear"></div>



@endsection

@section('scripts')

 <script type="text/javascript" src="{{ URL::to('src/js/product.js') }}"></script>

@endsection