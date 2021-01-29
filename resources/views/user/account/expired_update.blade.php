@extends('include.master')
@section('title','Expired|update')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{$message}}</strong> 
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{$message}}</strong>
        </div>
    @endif
    @if(auth()->user())
        @if(auth()->user()->address)
        @else
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <a href="{{ route('account.profile')}}"><strong style="color:#721c24;">You have to complete your profile.</strong></a> 
        </div>
        @endif
    @else
    @endif
	<section class="large-section-padding bg-grey">
		<div class="container">
			<div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<h2 class="align-center">Domains.go</h2>
					<div class="card">
                        
                            <table class="table--style3" style="position: relative;margin-bottom:0px;">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <!--<th></th>-->
                                    <th></th>  
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="domain_name">{{$expired_domains->domain}}.{{$expired_domains->extention}}</td>
                                    <td>
                                          <select class="form-control year" id="sel1" style="margin-top:1rem;" onchange="subtotal(this)">
                                            <option value=1>1year</option>
                                            <option value=2>2years</option>
                                            <option value=3>3years</option>
                                            <option value=4>4years</option>
                                            <option value=5>5years</option>
                                          </select>
                                    </td>
                                    <td id="price" class="price">${{$expired_domains->price}}</td>
                                    <td>
                                        <a href="{{ route('account.domains.delete', $expired_domains->id)}}">
                                            <i class="material-icons" style="cursor:pointer;" >delete</i>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                    </div>
                    
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                    <h2 class="align-center">Your Subtotal</h2>
					<div class="card">
                        <table class="table--style3" style="position: relative; ">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span>Subtotal: </span>
                                    </td>
                                    <td id="cart_total_price">
                                        ${{$expired_domains->price}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            <button type="button" class="btn btn-success" style="width:70%; margin:auto; margin-bottom:25px;" onclick="pay()">Confirm Order</button>
                    </div>
				</div>
			</div>
		</div>
	</section>

@endsection
@section('script')
    <script>
        function subtotal(total){
            var years = total.value;
            var price = document.getElementById("price");
            var prices = price.innerHTML;
            var price_number = prices.slice(1);
            var total_price = Number(years)*Number(price_number);
            console.log(price_number)
            document.getElementById("cart_total_price").innerHTML = "$"+total_price.toFixed(2);
            document.getElementById("expired_item_price").value = "$"+total_price.toFixed(2);
            document.getElementById("expired_domain_year").value = years;
            document.getElementById("ss_expired_pay").value = total_price;
        }
        
        function confirm_remove(){
            document.getElementById("pay_form").style.display="none";  
        }
        
        function pay_remove(pay_cacnel){
             document.getElementById("pay_now").style.display="none";   
        }
        
        function pay(){
            document.getElementById("expired_modal").click();   
        }
        function datasend(){
            var item_price = $('#expired_item_price').val();
            console.log()
            var item_currency = $('#ss_item_currency').val();
            var card_name = $('#ss_card_name').val();
            var card_number = $('#ss_card_number').val();
            var cvc = $('#ss_cvc').val();
            var expired_year = $('#ss_expired_year').val();
            var expired_date = $('#ss_expired_date').val();
            var merchant_account = $('#ss_merchant_account').val();
            var return_success = $('#ss_return_success').val();
            var data = {
                'item_price':item_price,
                'item_currency':item_currency,
                'card_name':card_name,
                'card_number':card_number,
                'cvc':cvc,
                'expired_year':expired_year,
                'expired_date':expired_date,
                'merchant_account':merchant_account,
                'return_success':return_success,
            }
            $.ajax({
               url:'https://sellupay.com/payment',
               type:'post',
               data:data,
               success:function(res){
                    var ret = JSON.parse(res);
                    var merchant_account = ret.merchant_account;
                    var item_price = ret.item_price;
                    var item_currency = ret.item_currency;
                    var hashes = ret.hash;
                    var pay_status = ret.success;
                    var pay_amount = item_price+item_currency;
                    console.log(ret)
                    console.log(hashes)
                    if(pay_status == "success"){
                        $('#ss_modal_merchant_account').val(merchant_account);
                        $("#ss_pay_amount").text(pay_amount);
                        $('#ss_modal_hash').val(hashes);
                        document.getElementById("ss_card_info").click();   
                        document.getElementById("expired_form").click(); 
                    }else if(pay_status == "space"){
                        $("#pay_status").text("Please check your Form");
                    }else if(pay_status == "merchant"){
                        $("#pay_status").text("Please check your merchant account");
                    }else if(pay_status == "merchant_id"){
                        $("#pay_status").text("Only Business accounts can accept payments.");
                    }
                   
               }
            });
}
        function del_cart(del, cart_number){
            $.ajax({
                type:'POST',
                url:'/home/search/del_cart',
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                data : {'cart_number':cart_number},
                success: function(ret){
                    if(ret==1){
                        var cart_number = document.getElementById("item_number").innerHTML;
                        document.getElementById("item_number").innerHTML = Number(cart_number)-1;
                        // var cart_number =  document.getElementById("item_number").innerHTML;
                        
                        // if(cart_number == "0"){
                        //     var confirm_button = document.getElementById("confirm_button");
                        //     confirm_button.style.display="none"
                        // }
                        location.reload();
                    }
                }
            });

            del.parentNode.parentNode.remove();
        }
        function login(){
            document.getElementById("loginpage").click();
        }
    </script>
@endsection