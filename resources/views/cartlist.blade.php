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
                      <th rowspan="1" class="hidden-phone"></th>
                 
                      <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                      <th class="a-center " rowspan="1">Qty</th>
                      <th colspan="1" class="a-center">Subtotal</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="first last">
                      <td class="a-right last" colspan="50"><a href="ordernow"><button onclick="ordernow" class="button btn-continue" title="Continue Shopping" type="button"><span>Continue Shopping</span></button>
                      </a> 
                    </tr>
                  </tfoot>
                  <tbody>

                    @foreach($products as $item)
                    <tr class="first odd">
                      <td class="image"><a class="product-image" title="" href="detail/{{$item->id}}"><img width="75" height="75" alt="Women's Crepe Printed Black" src="{{$item->gallery}}"></a></td>
                      <td><h2 class="product-name"> <a href="detail/{{$item->id}}">{{$item->name}}</a> </h2></td>
                      <td class="a-center hidden-table"><a title="Edit item parameters" class="edit-bnt" href="#"></a></td>
                  
                      <td class="a-center hidden-table"><span class="cart-price"> <span class="price">{{$item->price}}</span> </span></td>
                      <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="1" name=""></td>
                      <td class="a-center movewishlist"><span class="cart-price"> <span class="price">{{$item->price}}</span> </span></td>
                      <td class="a-center last"><a class="button remove-item" title="Remove item" href="/removecart/{{$item->cart_id}}"><span><span>Remove item</span></span></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </fieldset>
            </form>
          </div>
  </section>
  
    
@endsection