@extends('include.master')
@section('title','search')
@section('content')


	<section class="large-section-padding bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="align-center">SEARCH RESULT</h2>
				
					<table class="table--style3 mt-5">
						<thead>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
						</thead>
						<tbody>
						    
    						@if(count($project)>0)
        						@foreach($project as $temp)
        						    <tr class="{{$temp->user_id?'already-taken':''}}">
        							<td>
        							    {{$temp['domain']}}.{{$temp->extention}}
            							<span class="label-category label--yellow">{{$temp->status}}</span>
        							</td>
        							<td>
        							  
        							</td>
        							<td>
        							    @if($temp->status == "private")
        							    @else
        							    <a href="{{route('register_info', [$temp->id, $domain])}}" class="crumina-button button--lime button--xs button--bordered w-100" style="color:deeppink; float:right;">Who Is?</a>
        							    @endif
        							</td>
        							<td>
        							    
        							</td>
        						    </tr>
        						@endforeach
        					@endif
    						@foreach($extention as $tem)
    						    <tr>
    							<td>
    							    {{$domain}}.{{$tem->ext}}
    							</td>
    							<td>
    							    {{$tem->price}}
    							</td>
    							<td>
    							    <!--<a href="#" class="crumina-button button--lime button--xs button--bordered w-100" style="float:right; ">Order Now</a>-->
    							</td>
    							<td>
    							    <div id="cart_disable">
    							        <i class="material-icons cart" style="font-size:30px; float:right; cursor:pointer;" onclick="add_cart(this, {{$tem->id}}, '{{$domain}}')">add_shopping_cart</i>    
    							    </div>
    							</td>
    						    </tr>
    						@endforeach
					
					
						
						</tbody>
					</table>
					<!--<div>-->
					<!--    <form id="form" action="{{ route('checkout')}}" method="post">-->
					<!--        @csrf-->
					<!--        <button type="submit" class="btn btn-success" style="float:right; font-size:24px;" id="checkout">-->
    	<!--			        CheckOut <i class="material-icons" style="font-size:21px;">add_shopping_cart</i>-->
				 <!--           </button>  -->
					<!--    </form>-->
					<!--</div>-->
					
				</div>
			        
			</div>
		</div>
	</section>
    


</div>
@endsection

@section('script')
    <script>
    var i = 0;
        
        // function count_cart(){
        //     var cart_active = document.querySelectorAll('.cart.active');
            
        //     var cart_length = cart_active.length;
        //     console.log(cart_length)
        //     if(cart_length>0){
        //         document.getElementById("checkout").style.display="block";
        //         document.getElementById("item_number").style.display = "inline-grid";
        //     }
        //     document.getElementById("item_number").innerHTML=cart_length;
        // }
        function who(){
            document.getElementById("loginpage").click();
        }
        function add_cart(cart, id, domain){
            cart.style.color="green";
            cart.classList.add('active');
            
            // let p = document.createElement("INPUT");
            // document.getElementById("form").appendChild(p);    
            // p.value= id;
            // p.name = "ext[]";
            // p.type = "hidden";
            
            // let domain_name = document.createElement("INPUT");
            // document.getElementById("form").appendChild(domain_name);    
            // domain_name.value= domain;
            // domain_name.name = "domain[]";
            // domain_name.type = "hidden";
            $.ajax({
                type:'POST',
                url:'/home/search/add_cart',
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                data : {'id' :id,'domain_name':domain},
                success: function(ret){
                    $('#item_number').css('display', 'inline-block');
                }
            });
            var cart_number = document.getElementById("item_number").innerHTML;
            document.getElementById("item_number").innerHTML = Number(cart_number)+1;
            cart.setAttribute("onclick","disabled");
        }
    </script>
@endsection