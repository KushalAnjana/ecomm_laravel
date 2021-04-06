@extends('master')
@section("content")

<style>
    .top-categ {
      background-color:rgba(245, 245, 237, 0.938) !important;
      font-family: "Asap", sans-serif;
      color:#989898;
      margin-top: auto;
      font-size:16px;
      padding-top: 12px;
    }
    
    
    
    
    .green{
      background-color:#6fb936;
    }
            .thumb{
                margin-bottom: 30px;
            }
            
            .page-top{
                margin-top:85px;
            }
    
       
    img.zoom {
        width: 100%;
        height: 200px;
        border-radius:5px;
        object-fit:cover;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
    }
            
     
    .transition {
        -webkit-transform: scale(1.2); 
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }
        .modal-header {
       
         border-bottom: none;
    }
        .modal-title {
            color:#000;
        }
        .modal-footer{
          display:none;  
        }
        .content {
      position: relative;
      width: 100%;
      height: 250px;
      max-width: 400px;
      margin: auto;
      overflow: hidden;
    }
    
    .content .content-overlay {
      background: rgba(0,0,0,0.7);
      position: absolute;
      height: 99%;
      width: 100%;
      left: 0;
      top: 0;
      bottom: 0;
      right: 0;
      opacity: 0;
      -webkit-transition: all 0.4s ease-in-out 0s;
      -moz-transition: all 0.4s ease-in-out 0s;
      transition: all 0.4s ease-in-out 0s;
    }
    
    .content:hover .content-overlay{
      opacity: 1;
    }
      .content-image{
        width: 100%;
      }
        .content-details {
        position: absolute;
        text-align: center;
        padding-left: 1em;
        padding-right: 1em;
        width: 100%;
        top: 50%;
        left: 50%;
        opacity: 0;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
      }
      
      .content:hover .content-details{
        top: 50%;
        left: 50%;
        opacity: 1;
      }
    
        .content-details h3{
        color: #fff;
        
        text-transform: uppercase;
      }
      
      .content-details p{
        color: #fff;
        font-size: 0.8em;
      }
      
      .fadeIn-bottom{
        top: 80%;
      }
      
      .fadeIn-top{
        top: 20%;
      }
      
      .fadeIn-left{
        left: 20%;
      }
      
      .fadeIn-right{
        left: 80%;
      }
    </style>
  
  <!--Top Categories-->
  <div class="top-categ">
    <center><h1 style="color: black;">Search Item</h1></center>
    <div class="container page-top" ">
  
  
  
      <div class="row">
  
        @foreach($products as $item)
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="content">
              <a href="detail/{{$item['id']}}" rel="ligthbox">
                <div class="content-overlay"></div>
                  <img  src="{{$item['gallery']}}" alt="">
                  <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">{{$item['name']}}</h3>
                   
                  </div>
                 
              </a>
              <br>
            </div>
            <h3 class="content-title1">{{$item['name']}}</h3>
            <h5 class="content-title1">{{$item['description']}}</h5>
          </div>
          @endforeach
          
         
         
     </div>
  
   
    </div>
  
  </div>
  
      <!--Top Categories end-->

      @endsection