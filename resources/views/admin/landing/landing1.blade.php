
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$Landing->title}} | {{$Setting->site_name}} </title>
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/theme/css/bootstrap.min.css" />
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
              background-image: url(/assets/images/check.webp); 
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
                        <section class="">
    <div class="container-fluid">
       
        <div class="row">
            
            
             <div class="col-md-7">
                <div class="card " style="border: 1px solid #e9e9e9">
                    <div class="card-body p-2 table-responsive" id="order_info_table">
        			
<table class="cart_table table text-center mb-0">
  <thead style="background:#2C6036">
    <tr>
      <th class="text-white">#</th>
      <th class="text-white"> Image</th>
      <th class="text-white">Product</th>
      <th class="text-white">Price</th>
      <th class="text-white">Quantity</th>
      <th class="text-white">Total</th>
    </tr>
  </thead>

  <tbody>
    @csrf
    @php $total = 0; 
    $pp_total= 0;
    @endphp
   @if(session('cart'))
    @foreach(session('cart') as $id => $details)
        @php
            $sub_total= $details['price'] * $details['quantity'];
            $pp=$details['pp'];
            $pp_total +=$pp;
            $total +=$sub_total;
            
        @endphp
           
            <tr rowId="{{ $id }}">
      <td class="align-left" class="actions">
            <a class="btn btn-outline-danger btn-sm delete-product"> <i class="text-danger fas fa-trash"></i></a>
      </td>
      <td>
              <a href="#"><img loading="lazy" alt="" class="img-thumbnail" src="/uploads/{{ $details['image'] }}" style="max-width: 60px;"></a>
              </td>
      <td class="text-left">
        <p class="m-0"> {{ $details['name'] }}</p>
                                                                                                        
      </td>
      <td>{{ $details['price'] }}</td>

      <td width="10%" class="cart_qty text-center">
        <div class=" d-flex align-items-center mb-4 pt-1">

          <div class="input-group quantity mr-3" style="width: 130px;">
            <div class="input-group-btn">
              <button class="btn-number qtyminus quantity-minus bg-success text-white"
                      data-id="{{ $id}}">
                <i class="fa fa-minus"></i>
              </button>
            </div>
            <input type="text" class="input-qty qty bg-white form-control  text-center border-0 rounded-0" size="4""
                   value="{{ $details['quantity'] }}">
            <div class="input-group-btn">
              <button class="btn-number qtyplus quantity-plus bg-success text-white"
                      data-id="{{$id }}">
                <i class="fa fa-plus"></i>
              </button>
            </div>
          </div>
        </div>

      </td>
      <td>{{$sub_total}}</td>
    </tr>
    
    @endforeach
   @else
										<tr>
											<td class="text-center">
												There are no any carts available

											</td>
										</tr>
	@endif
          </tbody>

  <tfoot>
    <tr>
      <th colspan="4" class="text-right pr-2">Sub Total</th>
      <td><span id="net_total" data-value="{{$total}}">{{$total}}</span></td>

    </tr>
    <tr>
      <th colspan="4" class="text-right pr-2">Shipping Cost</th>
      <td>
                <span id="cart_shipping_cost">{{$dCharge->all_bangladesh}}</span>
      </td>
    </tr>
    <tr>
      <th colspan="4" class="text-right pr-2">Total</th>
      <td>
                <span id="grand_total">{{$total + $dCharge->all_bangladesh}}</span>
      </td>
          </tr>
  </tfoot>
</table> 



</div>
                </div>
                <div class="continue-shoping mt-3 float-end">
                    <a href="/" style="background:#2C6036; color:white; margin-bottom: 10px;" class="btn fw-bold">আরো কিনতে</a>
                </div>
</div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="col-md-5 mb-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('newOrder') }}" method="POST" id="checkout_form">
                          @csrf 
                                                     <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">আপনার নাম <span class="text-danger">*</span></label>
                                <input value="" type="text" class="form-control" id="customer_name" required name="name"
                                placeholder="আপনার  নাম লিখুন"> 
                              </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">মোবাইল নাম্বার <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="customer_phone" required name="mobile"
                                        placeholder="আপনার মোবাইল লিখুন ">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"> ডেলভারীর ঠিকাণা <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="customer_address" required name="shipping_address"
                                placeholder="আপনার ঠিকাণা লিখুন ">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"> ডেলিভারী এরিয়া  <span class="text-danger">*</span></label>
                                
                                <select name="shipping_charge" id="shipping_method" required class="form-control" >
                                <option value="{{$dCharge->all_bangladesh}}">ঢাকার বাহির</option>
                                                                        <option value="{{$dCharge->inside_dhaka}}">ঢাকার ভিতর</option>
                                                                      
                                                                    </select>
                            </div>
                             <input type="hidden" class=""name="total_pp" value="{{$pp_total}}">
                             <input type="hidden" class=""name="total" value="{{$total}}">
                            <input type="hidden" class="" name="payment_method" value="Cash On Delivery">
                            <div class="mb-3">
                               <button type="submit" style="background:#2C6036; color:white" class="btn fw-bold w-100" id="conf_order_btn">অর্ডার কনফার্ম করুণ</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
 </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <small> 2024 {{$Setting->site_name}}  | Developed By CoderSYS.</small>
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


<script>
    $(document).ready(function(){
      $('#menu').click(function(){
        document.getElementById('category-mobile').classList.toggle('category-list-mobil');
      })
    })
  </script>
  <script>
    $(document).ready(function(){
      $('#search').click(function(){
        // alert("ok")
        document.getElementById('search-mobile').classList.toggle('search-section-mobile');
      })
    })
  </script>
  <!-- <script>
    $(document).ready(function(){
      $('#search').click(function(){
        $('.search-mobile').toggleClass('.search-section-mobile');
      });
    });
  </script> -->
       <script>
       
        
        $(function() {
            $('#shipping_method').on('change', function() {
                console.log('sdfsdfs');
                var vvv = $(this).val();
                $("#cart_shipping_cost").text(vvv);
                $("#shipping_cost").val(vvv);
                calculate();

            })
            //$('#shipping_method').trigger('change')

        
          
         $(".delete-product").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
      

    $(".quantity-plus").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        
            $.ajax({
                url: '{{ route('updateCartPlus') }}',
                method: "GET",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
       
    });
    $(".quantity-minus").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        
            $.ajax({
                url: '{{ route('updateCartMinus') }}',
                method: "GET",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
       
    });
      
      		
        })

        function calculate() {
            var net_total = parseFloat($('#net_total').data('value'));
            let value = $(document).find('select#shipping_method').val();
            value = value == '' ? 0 : value;
            $(document).find('span#cart_shipping_cost').text(value);
            var cart_shipping_cost = parseFloat($('#cart_shipping_cost').text());
            $('#grand_total').text(net_total + cart_shipping_cost);
        }
    </script>
