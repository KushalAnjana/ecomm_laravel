@extends('master')
@section('content')
<link rel="stylesheet" type="text/css" href="css/internal.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="css/revslider.css" >
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/flexslider.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">
  
  <!-- Main Container -->
  <section class="main-container col2-right-layout bounceInUp animated">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9" >
          <div class="page-title">
            <h1>Checkout</h1>
          </div>
          <ol class="one-page-checkout" id="checkoutSteps" style="background-color: black;">
           
            <li id="opc-billing" class="section allow active">
              <div class="step-title"> <span class="number"></span>
                <h3 class="one_page_heading">Billing Information</h3>
                <!--<a href="#">Edit</a>--> 
              </div>
              <div id="checkout-step-billing" class="step a-item">
                <form id="co-billing-form" action="/orderplace" method="POST">
                    @csrf
                 
                  <fieldset class="group-select">
                    <ul>
                      <li id="billing-new-address-form" style="color: rgb(236, 255, 205);">
                        <fieldset>
                          
                          <input type="hidden"  id="billing:address_id" />
                          <ul>
                 <!--           <li>
                              <div class="customer-name" >
                                <div class="input-box name-firstname">
                                  <label for="billing:firstname"> First Name<span class="required">*</span></label>
                                  <br />
                                  <input type="text" id="billing:firstname" name="" title="First Name" class="input-text" />
                                </div>
                                <div class="input-box name-lastname">
                                  <label for="billing:lastname"> Last Name<span class="required">*</span> </label>
                                  <br />
                                  <input type="text" id="billing:lastname" name="" title="Last Name" class="input-text" />
                                </div>
                              </div>
                            </li>
                            
                        -->   <li>
                              <label for="billing:street1">Address <span class="required">*</span></label>
                              <br />
                              <input type="text" title="Street Address" name="address" id="billing:street1  street1" class="input-text" />
                            </li>
                           
                       <!--     <li>
                              <div class="input-box">
                                <label for="billing:city">City <span class="required">*</span></label>
                                <br />
                                <input type="text" title="City" name="" class="input-text" id="billing:city" />
                              </div>
                              <div id="div" class="input-box">
                                <label for="billing:region">State/Province <span class="required">*</span></label>
                                <br />
                                <select defaultvalue="" id="billing:region_id" name="" title="State/Province" class="validate-select" style="color: black;">
                                  <option >Please select region, state or province</option>
                                  <option value="1">Madhya Pradesh</option>
                                  <option value="2">Delhi</option>
                                  <option value="3">Maharashtra</option>
                                </select>
                              </div>
                            </li>
                         <li>
                              <div class="input-box">
                                <label for="billing:telephone">Telephone <span class="required">*</span></label>
                                <br />
                                <input type="text" name="" title="Telephone" class="input-text" id="billing:telephone" />
                              </div>
                            -->

                             
                              <div id="div" class="input-box">
                            <p>Payment Method: <span class="required">*</span></p>
                                 <input type="radio" id="" name="payment" value="cash">
                                 <label for="">PayPal</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="radio" id="" name="payment" value="cash">
                                 <label for="">Cash on Delivery</label>&nbsp;&nbsp;&nbsp;&nbsp;
                               
                              </div>
                                </li>
                            
                          </ul>
                        </fieldset>
                      </li>
                     
                    </ul>
                    <p class="require"><em class="required">* </em>Required Fields</p>
                    <button type="submit" class="button continue" ><span>Order Now</span></button>
                </fieldset>
                </form>
              </div>
            </li>
            
          
           
          </ol>
        </div>
        <aside class="col-right sidebar col-sm-3" >
          <div class="block block-progress">
            <div class="block-title ">Shopping Cart Total</div>
            <div class="block-content" style="background-color: black; " >
              <dl>
                <dt class="complete"> Products <span class="separator">|</span> <a href="#">Change</a> </dt>
                <dd class="complete">
                  <address><br><br>
                 Amount&nbsp;:-&nbsp;&nbsp;&nbsp; Rs. {{$total}}<br><br>
                 Tax&nbsp;:-&nbsp;&nbsp;&nbsp; Rs. 0<br><br>
                  Delivery&nbsp;:-&nbsp;&nbsp;&nbsp; Rs. 10<br><br>
                  
                  
                Total Amount&nbsp;:-&nbsp;&nbsp;&nbsp; Rs. {{$total+10}}<br><br>
                 
                 
                </dd>
               
              </dl>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <!-- Main Container end --> 
  
    
@endsection