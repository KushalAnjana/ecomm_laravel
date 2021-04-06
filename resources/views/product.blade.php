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
  

  <!-- Slider -->
  <div id="thm-slideshow" class="thm-slideshow">
    <div class="container">
      <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;"> 
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
          <ul>
            <!-- SLIDE  -->
            <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slide-img1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="https://bikeadvice.in/wp-content/uploads/2015/03/Royal-Enfield-Online-Store-1280x720.jpg" alt=""> 
            </li>
            
            <li data-index="rs-16" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slide-img2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="https://www.motoroids.com/wp-content/uploads/2020/07/Royal-Enfield-apparel.jpg"  alt=""> 
              <!-- LAYERS --> 
              
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-19" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/video-img.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="HTML5 Video" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="https://img.advertgallery.com/wp-content/uploads/2018/07/royal-enfield-bikes-make-it-yours-now-ad-times-of-india-bangalore-08-07-2018.png"  alt=""> 
              <!-- LAYERS --> 
             
            </li>
            <!-- SLIDE  -->
            
          </ul>
          <div class="tp-static-layers"></div>
          <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- end Slider -->
            
          </ul>
          <div class="tp-static-layers"></div>
          <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- end Slider -->
  
  <!--Top Categories-->
  <div class="top-categ">
    <center><h1 style="color: black;">Top Categories</h1></center>
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
            </div>
          </div>
          @endforeach
          
         
         
     </div>
  
   
    </div>
  
  </div>
  
      <!--Top Categories end-->


<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/countdown.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider.js"></script> 
<script type="text/javascript" src="js/revolution.extension.js"></script> 
 

<script type="text/javascript">
					var tpj=jQuery;			
					var revapi4;
					tpj(document).ready(function() {
						if(tpj("#rev_slider_4_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_4_1");
						}else{
							revapi4 = tpj("#rev_slider_4_1").show().revolution({
								sliderType:"standard",
								sliderLayout:"fullwidth",
								dottedOverlay:"none",
								delay:9000,
								navigation: {
									keyboardNavigation:"off",
									keyboard_direction: "horizontal",
									mouseScrollNavigation:"off",
									onHoverStop:"off",
									touch:{
										touchenabled:"on",
										swipe_threshold: 75,
										swipe_min_touches: 1,
										swipe_direction: "horizontal",
										drag_block_vertical: false
									}
									,
									arrows: {
										style:"zeus",
										enable:true,
										hide_onmobile:true,
										hide_under:750,
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
										left: {
											h_align:"left",
											v_align:"center",
											h_offset:30,
											v_offset:0
										},
										right: {
											h_align:"right",
											v_align:"center",
											h_offset:30,
											v_offset:0
										}
									}
									,
									bullets: {
										enable:true,
										hide_onmobile:true,
										hide_under:600,
										style:"metis",
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										direction:"horizontal",
										h_align:"center",
										v_align:"bottom",
										h_offset:0,
										v_offset:30,
										space:5,
									
									}
								},
								viewPort: {
									enable:true,
									outof:"pause",
									visible_area:"80%"
								},
								responsiveLevels:[1240,1024,778,480],
								gridwidth:[768,1024,778,480],
								gridheight:[890,600,500,400],
								lazyType:"none",
								parallax: {
									type:"mouse",
									origo:"slidercenter",
									speed:2000,
									levels:[2,3,4,5,6,7,12,16,10,50],
								},
								shadow:0,
								spinner:"off",
								stopLoop:"off",
								stopAfterLoops:-1,
								stopAtSlide:-1,
								shuffle:"off",
								autoHeight:"off",
								hideThumbsOnMobile:"off",
								hideSliderAtLimit:0,
								hideCaptionAtLimit:0,
								hideAllCaptionAtLilmit:0,
								debugMode:false,
								fallbacks: {
									simplifyAll:"off",
									nextSlideOnWindowFocus:"off",
									disableFocusListener:false,
								}
							});
						}
					});	/*ready*/
				</script>
                
              
</body>
</html>

@endsection