<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}
?>
<div id="page"> 
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row"> 
            <!-- Header Language -->
            <div class="col-xs-7 col-sm-6">
              
              @if(Session::has('user'))
              <div class="welcome-msg hidden-xs"> Welcome {{Session::get('user')['name']}} </div>
              @else
              <div class="welcome-msg hidden-xs"> Welcome  </div>
              @endif
              
              
            </div>
            <div class="col-xs-5 col-sm-6"> 
              
              <div class="top-cart-contain pull-right"> 
            <!-- Top Cart -->
              </div>
          <div class="top-search">
            <div class="block-icon pull-right"> <a data-target=".bs-example-modal-lg" data-toggle="modal" class="search-focus dropdown-toggle links"> <i class="fa fa-search"></i> </a>
              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button aria-label="Close" data-dismiss="modal" class="close" type="button"><img src="images/interstitial-close.png" alt="close"> </button>
                    </div>
                    <div class="modal-body">
                      <form action="/search" class="navbar-form" >
                        <div id="search">
                          <div class="input-group">
                            <input placeholder="Search" class="form-control" type="text" name="query" >
                            <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
              <!-- Header Top Links -->
              <div class="toplinks">
                <div class="links">
                
                  <div class="myaccount"><a title="My Account" href="/cartlist"hidden-xs">My Cart({{$total}})</span></a></div>
                 
                  <!-- Header Company -->
                  
                  <!-- End Header Company -->
                  @if(Session::has('user'))
                  <div class="login"><a href="/logout"><span class="hidden-xs">Logout</span></a></div>
                  <div class="login"><a href="/myorders"><span class="hidden-xs">My Order</span></a></div>
                  @else
                  <div class="login"><a href="/login"><span class="hidden-xs">Login</span></a></div>
                  <div class="login"><a href="/register"><span class="hidden-xs">Register</span></a></div>
                  @endif
                 
                </div>  
                
              </div>
              <!-- End Header Top Links --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Navbar -->
  <nav style="background-color: black; height: 130px;" >
    <div class="container">
          <!-- Header Logo -->
          <div class="logo"><a title="" href="/"><img alt="" src="img/12.png" width="180px"></a></div>
          <!-- End Header Logo --> 

      
          
          
       
    </div>
  </nav>
  <!-- end nav --> 
  