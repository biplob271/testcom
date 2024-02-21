
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <link rel="stylesheet" href="/landingpage/1/style.css">
    <link rel="stylesheet" href="/landingpage/1/media.css">

</head>
<body>
   <div class="main-wrapper">
        <div class="top-div">
            <div class="container">

                <div class="center">
                   
                    <a href="/"><img loading="lazy" src="/uploads/{{$Setting->image}}" alt=""></a>
                  
                </div>
                <div class="element-width" data-aos="fade-down" data-aos-duration="1000">
                    <div class="top-box-weight">
                        <h2 class="top-heading-title">
                        {{$Landing->title}}
                        </h2>
                    </div>
                </div>
                <div class="text-info-box" data-aos="fade-up">
                        <h2 class="top-heading-title">
                        <p> {{$Landing->sub_title}}</p>

                        </h2>
                </div>

            </div>
            <div class="element-shape"></div>
        </div>
        <style>
            .video-box iframe {
                width: 100% !important;
            }
            ul {
              list-style: none;
            }
            
            ul li {
              padding-left: 20px; 
              line-height: 1.5; 
            }
            
            ul li::before {
              content: ""; 
              display: inline-block; 
              width: 20px; 
              height: 20px; 
              background-image: url(https://demo2.softitglobal.com/frontend/images/check.webp); 
              background-size: cover; 
              background-repeat: no-repeat;
              margin-right: 10px;
            }  
        </style>
        <div class="down-div">
            <div class="container">
                <div class="row">
                    <div class="video-box" data-aos="zoom-in">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$Landing->video_url}}" title=" {{$Landing->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="ani-btn-box" style="margin-top: 45px;">
                            <div class="inner-padding" data-aos="fade-up">
                                <button id="order_btn" class="btn btn-danger" style="border: 3px solid white;">
                                    অর্ডার করত চাই
                                </button>
                            </div>
                        </div>
                </div>

                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="element-widget" style="margin-top: 40px;">
                        <h2 class="top-heading-title">
                        <p> {{$Landing->feature}}</p>
                        </h2>
                    </div>
                </div>

                <div class="element-widget-cover">
                    <div class="element-widget-wrap">
                        <div class="element-widget">
                            <h2 class="top-heading-title">
                            {{$Landing->img_head}}
                            </h2>
                        </div>
                        <div class="owl-carousel img-gallery">

                           
                            <div class="">
                                <img src="/uploads/{{ (!empty($Landing)) ? $Landing->image1 : '' }}" alt="img">
                            </div>

                            
                            <div class="">
                                <img src="/uploads/{{ (!empty($Landing)) ? $Landing->image2 : '' }}" alt="img">
                            </div>

                            
                            <div class="">
                                <img src="/uploads/{{ (!empty($Landing)) ? $Landing->image3 : '' }}" alt="img">
                            </div>

                            
                        </div>
                        <div class="ani-btn-box">
                            <div class="inner-padding" data-aos="fade-up">
                                <button id="order_btn2" class="btn btn-danger" style="border: 3px solid white;">
                                  অর্ডার করতে চাই
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="element-widget-cover">
                    <div class="element-widget-wrap">
                        <div class="element-widget" style="background: #ffffff;text-align: left;padding-left: 58px;">
                            <h2 class="top-heading-title" style="color: #000000;">
                           
                            {!!html_entity_decode($Landing->descrip)!!}
                           
      
                            </h2>
                        </div>

                        <div class="element-info text-center">
                            <h2 class="top-heading-title text-danger">
                                হোম ডেলিভারি ফ্রি..
                            </h2>
                        </div>

                    </div>

                </div>
                <div id="element_widget" class="element-widget-cover">
                    <div class="element-widget-wrap">
                        <div class="element-widget" style="margin-bottom: 25px;">
                            <h2 class="top-heading-title bg-light-green">
                              অর্ডার করতে নিচের ফর্মটি সঠিক তথ্য দিয়ে পূরন করুন
                            </h2>
                        </div>
                        <div class="form-wrapper">
                        <form action="{{ route('newOrder') }}" method="POST" id="checkout_form">
                           @csrf
                            <div class="row">
                               <div class="address_section col-md-6" style="width: 50%;float: left;">
                                    <div class="form-address">
                                        <div class="address-col">
                                            <h3>Billing Address</h3>
                                            <div class="billing-fields">
                                                <div class="form-group">
                                                    <label for="">আপনার নাম <span>*</span></label>
                                                    <input type="text" name="name" class="form-control">
                                                

                                                </div>
                                                <div class="form-group">
                                                    <label for="">আপনার মোবাইল নাম্বার</span></label>
                                                    <input type="text" name="mobile" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">আপনার সম্পূর্ণ ঠিকানা<span>*</span></label>
                                                    <input type="text" name="shipping_address" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1" style="float: left;">ডেলিভারি এলাকা নির্বাচন করুন</label>
        <select required name="shipping_charge" style="min-height: 30px !important;" onchange="getCharge()" id="delivery_charge_id" class="form-control" style="font-size:12px !important;">

                                                                                          <option value="70" id="charge" data-charge="70.00">ঢাকার ভিতর</option>
                                                                                          <option value="150" id="charge" data-charge="150.00">ঢাকার বাহির</option>
                                                                                  </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="order-col" style="width: 50%;">
                                        <h3>Your Order</h3>
                                        <div id="order_review" class="review-order">
                                            <table class="shop_table review-order-table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-total">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <div class="product-image">
                                                            <div class="product-thumbnail"><img width="100%" src="/uploads/{{ (!empty($product)) ? $product->image : '' }}" class="" alt="" > </div>
                                                                <div class="product-name-td">{{ (!empty($product)) ? $product->name : '' }}<br> Regular Price BDT: <del>{{ (!empty($product)) ? $product->rp : '' }}</del> </div>
                                                               
                                                            </div>

                                                        </td>




                                                    
                                                        <td class="product-total">
                                                        <span id="price" class="price-amount amount">{{ (!empty($product)) ? $product->dp : '' }}<span class="price-currencySymbol">&nbsp;</span></span>
                                                        </td>
                                                        
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td><span class="price-amount amount">{{ (!empty($product)) ? $product->dp : '' }}<span class="price-currencySymbol">&nbsp;</span></span></td>
                                                    </tr>
                                                    <tr class="shipping-totals shipping">
                                                        <th>Shipping</th>
                                                        <td>
                                                            <li style="list-style: none;">
                                                                <span id="delvry_charge">0</span>
                                                            </li>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td><strong><span id="total" class="Price-amount amount">0.00<span class="Price-currencySymbol">৳&nbsp;</span></span></strong> </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div id="payment" class="checkout-payment">
                                                <ul class="payment_methods payment_methods methods">
                                                    <li class="payment_method payment_method_cod">
                                                        <label for="payment_method_cod">
                                                        Cash on delivery 	</label>
                                                        <div class="payment_box payment_method_cod">
                                                            <p>Pay with cash upon delivery.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <input type="hidden" class=""name="total" value="{{$product->dp}}">
                                                <div class="form-row place-order">
                                                     <button type="submit" class="button" name="" id="">অর্ডার করুন</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <small> 2024 codersys.com | Developed By CoderSYS.</small>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!--<link rel="stylesheet" href="https://demo2.softitglobal.com/backend/landing_page/js/carousel.min.js">-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--<link rel="stylesheet" href="https://demo2.softitglobal.com/backend/landing_page/js/main.js">-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</body>
</html>


<script>

    
        
        
            $("#order_btn").click(function() {
                $('html,body').animate({
                    scrollTop: $("#element_widget").offset().top},
                    'slow');
            });
            
            $("#order_btn2").click(function() {
               $('html,body').animate({
                    scrollTop: $("#element_widget").offset().top},
                    'slow');
            });
        

    $(document).on('submit','form#checkout_form', function(e) {
    e.Default();
    $('span.textdanger').text('');

    let ele=$('form#checkout_form');
    var url=ele.attr('action');
    var method=ele.attr('method');
    var formData = ele.serialize();

    $.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

    $.ajax({
        type: method,
        url: url,
        data: formData,
        success: function(res) {
            if(res.success==true){
                toastr.success(res.msg);
                if(res.url){
                    document.location.href = res.url;
                }
                else{
                    window.location.reload();
                }

            }else if(res.success==false){
                toastr.error(res.msg);
            }

        },
        error:function (response){
            $.each(response.responseJSON.errors,function(field_name,error){
                $(document).find('[name='+field_name+']').after('<span class="textdanger" style="color:red">' +error+ '</span>');
            })
        }
    });
});
$(document).ready(function(){
    getCharge();
	$(".img-gallery").owlCarousel({
		loop: true,
		autoplay: true,
		dots: false,
		margin: 10,
		nav: false,
		responsive: {
			0	: {
				items: 1,
			},
			700: {
				items: 2,
			},
			1200: {
				items: 3,
			},
		},
	});
  });

function getCharge(){

            let delivery_charge= $('#delivery_charge_id').find("option:selected");
            var crg_id = delivery_charge.val();
            var testval = delivery_charge.data('charge');
            $('span#delvry_charge').text(testval);
            $('span#charge').text(Number(testval).toFixed(2));
            var price = $('span#price').text();
            let total=Number(testval)+Number(price);
            $('#total').text(total);
            // $('td.order-total-amount').text(total.toFixed(2));
        }


AOS.init({
	duration: 1200,
});

</script>

