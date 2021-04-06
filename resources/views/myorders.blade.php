@extends('master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/internal.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
<link rel="stylesheet" type="text/css" href="css/revslider.css" >
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/flexslider.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">


     
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          <div class="page-title">
            <h1>Shopping Cart</h1>
          </div>
          <div class="table-responsive">
            <form method="post" action="#">
              <fieldset>
                <table class="data-table cart-table" id="shopping-cart-table">
                  <thead>
                    <tr class="first last">
                      <th rowspan="1">&nbsp;</th>
                      <th rowspan="1"><span class="nobr">Product Name</span></th>
                      <th rowspan="1" class="hidden-phone">Delivery Status</th>
                 
                      <th colspan="1" class="a-center"><span class="nobr">Address</span></th>
                      <th class="a-center " rowspan="1">Payment status</th>
                      <th colspan="1" class="a-center">Payment Method</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>
                  <tfoot>
                   
                  </tfoot>
                  <tbody>

                    @foreach($orders as $item)
                    <tr class="first odd">
                      <td class="image"><a class="product-image" title="" href="detail/{{$item->id}}"><img width="75" height="75" alt="Women's Crepe Printed Black" src="{{$item->gallery}}"></a></td>
                      <td><h2 class="product-name"> <a href="detail/{{$item->id}}">{{$item->name}}</a> </h2></td>
                      <td><h2 class="product-name"> <a href="">{{$item->status}}</a> </h2></td>
                  
                      <td><h2 class="product-name"> <a href="">{{$item->address}}</a> </h2></td>
                      <td><h2 class="product-name"> <a href="">{{$item->payment_status}}</a> </h2></td>
                      <td><h2 class="product-name"> <a href="">{{$item->payment_method}}</a> </h2></td>
                    
                    
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </fieldset>
            </form>
          </div>
         
          
        </div>
      </div>
    </div>
  </section>
  
    
@endsection