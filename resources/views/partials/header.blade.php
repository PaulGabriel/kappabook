<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <span class="pull-left"><a class="navbar-brand" href="{{ route('product.index')}}">KappaBook</a></span>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    <!--
       <div class="col-lg-12">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control search" placeholder="Search" name="q" style="border-color: white; box-shadow: none; outline: 0;">
            <div class="input-group-btn">
                <button class="btn btn-default search-btn" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    -->
    <li>&nbsp; &nbsp; </li>
     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book" aria-hidden="true" style="font-size: 18px;"></i>&nbsp; Books <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('category.action') }}">Action</a></li>
            <li><a href="{{ route('category.adventure') }}">Adventure</a></li>
            <li><a href="{{ route('category.fantasy') }}">Fantasy</a></li>
            <li><a href="{{ route('category.history') }}">History</a></li>
            <li><a href="{{ route('category.romance') }}">Romance</a></li>
          </ul>
        </li>

        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        

      <li>
      <a href="{{ route('product.shoppingCart') }}">
      
       <i class="fa fa-shopping-basket" aria-hidden="true" style="font-size: 18px;"></i>
       @if(Auth::check())
        @if(Session::has('cart'))
        <span class="badge"> {{ Session::has('cart')  ? Session::get('cart')->totalQty : '' }}</span>
          @endif
       @endif
       &nbsp; My Cart
       </a>
      <!--- 
       <ul class="dropdown-menu dropdown-cart" role="menu">
              <li>  
               <span class="item">
                    <span class="item-left">
              <label>Last products added</label> 
              </span>
              </span>
              </li>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <span class="item-info">
                            <span>Game of Thrones</span>
                        </span>
                    </span>
                    <span class="item-right">
                          <span>19 EUR</span>
                    </span>
                </span>
              </li>
                <li>
                  <span class="item">
                    <span class="item-left">
                        <span class="item-info">
                            <span>Game of Thrones</span>
                        </span>
                    </span>
                    <span class="item-right">
                          <span>19 EUR</span>
                    </span>
                </span>
              </li>
                <li>
                  <span class="item">
                    <span class="item-left">
                        <span class="item-info">
                            <span>Game of Thrones</span>
                        </span>
                    </span>
                    <span class="item-right">
                          <span>19 EUR</span>
                    </span>
                </span>
              </li>
             
              <li class="divider"></li>
              
              <li><a class="text-center" href=""> > View Cart</a></li>
          </ul>
          -->
        </li>
       
       <li><a href="{{ route('product.Wishlist') }}"><span class="fa fa-heart"></span> 
       @if(Auth::check())
        @if(Session::has('wish'))
        <span class="badge"> {{ Session::has('wish')  ? Session::get('wish')->totalQty : '' }}</span>
          @endif
        @endif
        &nbsp; Wishlist</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true" style="font-size: 18px;"></i>&nbsp; My Profile <span class="caret"></span></a>
          <ul class="dropdown-menu">
          @if(Auth::check())
           <li><a href="{{ route('user.profile') }}">User Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('user.logout') }}">Logout</a></li>
            @else
              <li><a href="{{ route('user.signup') }}">Create a new account</a></li>
            <li><a href="{{ route('user.login') }}">Login</a></li>
          @endif
          </ul>
        </li>
        

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


