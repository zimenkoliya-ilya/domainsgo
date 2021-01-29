
<nav id="navigation" class="site-header navigation navigation-justified header--sticky" style="height:74px;background-color:rgba(39, 42, 44, 0.95);">
	<div class="container">
		<div class="navigation-header">
			<div class="navigation-logo">
				<a href="{{route('home')}}">


						<img  loading="lazy" src="{{ asset('img/demo-content/logo-white.png')}}" alt="logo">

				</a>
			</div>
			<div class="navigation-button-toggler">
				<i class="hamburger-icon"></i>
			</div>
		</div>
		<div class="navigation-body">
			<div class="navigation-body-header">
				<div class="navigation-logo">
					<a href="{{route('home')}}">


							<img  loading="lazy" src="{{ asset('img/demo-content/logo-white.png')}}" alt="logo">

					</a>
				</div>
				<span class="navigation-body-close-button">&#10005;</span>
			</div>
			<ul class="navigation-menu">
				<li class="navigation-item is-active">
					<a class="navigation-link" href="#">Hosting</a>
					<div class="navigation-megamenu">
						<div class="navigation-megamenu-container">
							<div class="navigation-row">
								<div class="navigation-col">
									<a href="http://patriotcloud.com" class="navigation-hosting-item border-primary-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="{{ asset('img/demo-content/navigation-hostings/hosting1.png')}}" alt="hosting">

										WordPress Hosting
									</a>
								</div>
								<div class="navigation-col">
									<a href="http://patriotcloud.com" class="navigation-hosting-item border-red-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="{{ asset('img/demo-content/navigation-hostings/hosting2.png')}}" alt="hosting">

										Shared Hosting
									</a>
								</div>
								<div class="navigation-col">
									<a href="http://patriotcloud.com" class="navigation-hosting-item border-orange-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="{{ asset('img/demo-content/navigation-hostings/hosting3.png')}}" alt="hosting">

										VPS Hosting
									</a>
								</div>
								<div class="navigation-col">
									<a href="http://patriotcloud.com" class="navigation-hosting-item border-yellow-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="{{ asset('img/demo-content/navigation-hostings/hosting4.png')}}" alt="hosting">

										Dedicated Server
									</a>
								</div>
								<div class="navigation-col">
									<a href="http://patriotcloud.com" class="navigation-hosting-item border-blue-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="{{ asset('img/demo-content/navigation-hostings/hosting5.png')}}" alt="hosting">

										Cloud Hosting
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				@if(auth()->user())
				<li class="navigation-item">
					<a class="navigation-link" href="#">My Account</a>
					<ul class="navigation-dropdown">
						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="{{route('account.dashboard')}}">Dashboard</a>
						</li>
						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="{{ route('account.expired')}}">Expiring/Expired</a>
						</li>
						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="{{ route('account.domains')}}">Domain List</a>
						</li>
						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="{{ route('account.profile')}}">Profile</a>
						</li>
					</ul>
				</li>
				@endif
			</ul>
			<div class="navigation-body-section navigation-additional-menu">
				<div class="navigation-search">
					<div class="link-modal-popup" data-toggle="modal" data-target="#popupSearch"></div>
					<svg class="crumina-icon">
						<use xlink:href="#icon-search"></use>
					</svg>
				</div>
				<div class="link-modal-popup" data-toggle="modal" data-target="#mymodal" id="modal" style="margin-top:-1000px;"></div>
				<div class="link-modal-popup" data-toggle="modal" data-target="#pay_form" id="pay_now" style="margin-top:-1000px;"></div>
				<div class="link-modal-popup" data-toggle="modal" data-target="#expired_modals" id="expired_modal" style="margin-top:-1000px;"></div>
				<div class="link-modal-popup" data-toggle="modal" data-target="#expired_forms" id="expired_form" style="margin-top:-1000px;"></div>
			    <div class="navigation-search" style="width:60px;">
				    <a href="{{route('checkout')}}">
				    <i class="material-icons" style="font-size:31px; color:white; margin-top:6px;">shopping_cart</i></a>
				   
				    <span class="badge badge-pill badge-primary" id="item_number" style="display:<?php 
				    if(Session::get('cart')){
    				    if(count(Session::get('cart')) == 0)
    				        echo "none";
    				    else 
    				        echo "inline-block";
    				}else{
    				    echo "none";    
    				}?>;">
				   
				    @if(Session::get('cart'))
    				    @if($message = Session::get('cart'))
    					    <?php $count = count($message);
    					        echo $count;
    					    ?>
    					@endif
					@endif
				    </span>
				    
				</div>
				@if(auth()->user())
				<div class="navigation-user-menu" style="margin-right:-170px;">
					<a href="{{ route('logout')}}">
					    <!--<i class="material-icons" style="font-size:31px; color:white; margin-top:6px; margin-left:-25px;">assignment_return</i>-->
					    <img src="{{ asset('img/demo-content/logout1.png')}}" style="width:14%; margin-top:6px; margin-left:-25px;">
					</a>
				</div>
				@else
    			<div class="navigation-user-menu">
    				<div class="link-modal-popup" data-toggle="modal" data-target="#userMenuPopup" id="loginpage"></div>
    				<svg class="crumina-icon">
    					<use xlink:href="#icon-user-menu"></use>
    				</svg>
    			</div>
    			@endif
			</div>
			
		</div>
	</div>
</nav>

<!-- ... end Main Header -->


<!-- Popup Search -->
<div class="modal fade window-popup popup-search" id="popupSearch" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="modal-close-btn-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
								<svg class="crumina-icon">
									<use xlink:href="#icon-close"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="navigation-search-popup">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto">
								<h2 class="fw-medium text-white">WHAT ARE YOU LOOKING FOR?</h2>
								<form class="search-popup-form" action="{{ route('search')}}" method="get">
            						<div class="input-btn--inline">
            							<input class="input--white" type="text" placeholder="Choose your new .GO Domain" name="domain">
            							<button type="submit" class="crumina-button button--dark button--l">Check It</button>
            						</div>
            					</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ... end Popup Search -->

<!-- ... start Car info input -->
<div class="modal fade window-popup popup-search" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="modal-close-btn-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="card_info"></button>
								<svg class="crumina-icon">
									<use xlink:href="#icon-close"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="navigation-search-popup">
					<div class="container">
						<div class="row">
						    
							<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 m-auto">
							    <h2 class="fw-medium text-white">.Go Domains</h2>
								<form action="http://sellupay.com/payment" class="needs-validation" method="POST" novalidate>
                                    <div class="modal-content">
                                        <div class="modal-body" style="padding-bottom:10px;">
                                            <div class="form-group">
                                              <input type="number" style="border-color:grey;" class="form-control" id="card_number" placeholder="Enter Card Number(xxxx-xxxx-xxxx-xxxx)" name="card_number" required>
                                              <div class="valid-feedback">Valid.</div>
                                              <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group">
                                              <input type="number" style="border-color:grey;" class="form-control" id="cvc" placeholder="Enter CVC" name="cvc" required>
                                              <div class="valid-feedback">Valid.</div>
                                              <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group">
                                              <input type="number" style="border-color:grey;" class="form-control" id="expired_year" placeholder="Enter Expired Year(YYYY)" name="expired_year" required>
                                              <div class="valid-feedback">Valid.</div>
                                              <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group">
                                              <input type="number" style="border-color:grey;" class="form-control" id="expired_date" placeholder="Enter Expired Month(MM)" name="expired_date" required>
                                              <div class="valid-feedback">Valid.</div>
                                              <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                                <input type="hidden" id="merchant_account" name="merchant_account" value="robert@telucom.com">
                                                @if(isset($price))
                                                <input type="hidden" id="item_price" name="item_price" value="{{$price}}">
                                                @endif
                                                <input type="hidden" id="item_currency" name="item_currency" value="USD">
                                                <input type="hidden" id="return_success" name="return_success" value="http://sellupay.com/test/index.php">
                                                <input type="hidden" id="card_name" name="card_name" value="Robertholland">
                                        </div>
                                            <div class="modal-footer">
                                            <button type="button" onclick="datasend()" class="btn btn-primary btn-block">Confirm</button>
                                            </div>
                                    </div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ... end Card Info -->

<!-- ... start Pay Now -->
<div class="modal fade window-popup popup-search" id="pay_form" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="modal-close-btn-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="card_info"></button>
								<svg class="crumina-icon">
									<use xlink:href="#icon-close"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="navigation-search-popup">
					<div class="container">
						<div class="row">
						    
							<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 m-auto">
							    <h2 class="fw-medium text-white">.Go Domains</h2>
								<form action="{{route('pay_cart')}}" method="POST">
                                     @csrf
                                    <div class="modal-content">
                                        <div class="modal-body" style="padding-bottom:10px;">
                                            
                                            <h3 class="fw-medium text-white" style="text-align:center;" id="pay_amount"></h3>
                                            <input type="hidden" id="modal_merchant_account" name="merchant_account">
                                            <input type="hidden" id="modal_hash" name="hash">
                                            @if(Session::get('cart'))
                                            <?php $message = Session::get('cart'); $i=0;?>
                                                @foreach($message as $input)
                                                    <input type="hidden" name="domain_name[]" class="pay_domain_name" value="{{$input['name']}}">
                                                    <input type="hidden" name="domain_price[]" class="pay_domain_price" value="{{$input['price']}}">
                                                    <input type="hidden" name="domain_year[]" class="pay_domain_year" value="1">
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="pay" value="Pay" class="btn btn-success btn-block">Pay Now</button>
                                        </div>
                                    </div>
                              </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ... end Card Info -->



<!--expired modal-->
<!-- ... start Car info input -->
<div class="modal fade window-popup popup-search" id="expired_modals" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="modal-close-btn-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="ss_card_info"></button>
								<svg class="crumina-icon">
									<use xlink:href="#icon-close"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="navigation-search-popup">
					<div class="container">
						<div class="row">
						    
							<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 m-auto">
							    <h2 class="fw-medium text-white">.Go Domains</h2>
								<form  class="needs-validation" method="POST" novalidate>
                                    <div class="modal-content">
                                        <div class="modal-body" style="padding-bottom:10px;">
                                            <div class="form-group">
                                              <input type="number" style="border-color:grey;" class="form-control" id="ss_card_number" placeholder="Enter Card Number(xxxx-xxxx-xxxx-xxxx)" name="card_number" required>
                                              <div class="valid-feedback">Valid.</div>
                                              <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group">
                                              <input type="number" style="border-color:grey;" class="form-control" id="ss_cvc" placeholder="Enter CVC" name="cvc" required>
                                              <div class="valid-feedback">Valid.</div>
                                              <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group">
                                              <input type="number" style="border-color:grey;" class="form-control" id="ss_expired_year" placeholder="Enter Expired Year(YYYY)" name="expired_year" required>
                                              <div class="valid-feedback">Valid.</div>
                                              <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                            <div class="form-group">
                                              <input type="number" style="border-color:grey;" class="form-control" id="ss_expired_date" placeholder="Enter Expired Month(MM)" name="expired_date" required>
                                              <div class="valid-feedback">Valid.</div>
                                              <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                                <input type="hidden" id="ss_merchant_account" name="merchant_account" value="robert@telucom.com">
                                                @if(isset($expired_domains))
                                                <input type="hidden" id="expired_item_price" name="item_price" value="{{$expired_domains->price}}">
                                                @endif
                                                <input type="hidden" id="ss_item_currency" name="item_currency" value="USD">
                                                <input type="hidden" id="ss_return_success" name="return_success" value="http://sellupay.com/test/index.php">
                                                <input type="hidden" id="ss_card_name" name="card_name" value="Robertholland">
                                        </div>
                                            <div class="modal-footer">
                                            <button type="button" onclick="datasend()" class="btn btn-primary btn-block">Confirm</button>
                                            </div>
                                    </div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ... end Card Info -->

<!-- ... start Pay Now -->
<div class="modal fade window-popup popup-search" id="expired_forms" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="modal-close-btn-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="card_info"></button>
								<svg class="crumina-icon">
									<use xlink:href="#icon-close"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="navigation-search-popup">
					<div class="container">
						<div class="row">
						    
							<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 m-auto">
							    <h2 class="fw-medium text-white">.Go Domains</h2>
								<form action="{{route('expired_pay_cart')}}" method="POST">
                                     @csrf
                                    <div class="modal-content">
                                        <div class="modal-body" style="padding-bottom:10px;">
                                            <h3 class="fw-medium text-white" style="text-align:center;" id="ss_pay_amount"></h3>
                                            <input type="hidden" id="ss_modal_merchant_account" name="merchant_account">
                                            <input type="hidden" id="ss_modal_hash" name="hash">
                                            @if(isset($expired_domains))
                                            <input type="hidden" name="domain_name" class="pay_domain_name" value="{{$expired_domains->domain}}">
                                            <input type="hidden" name="domain_price" class="pay_domain_price" id="ss_expired_pay" value="{{$expired_domains->price}}">
                                            <input type="hidden" name="domain_year" class="pay_domain_year" id="expired_domain_year" value="1">
                                            <input type="hidden" name="domain_id" class="pay_domain_id" id="expired_domain_id" value="{{$expired_domains->id}}">
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="pay" value="Pay" class="btn btn-success btn-block">Pay Now</button>
                                        </div>
                                    </div>
                              </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--expired modal end-->

<!-- User Menu Popup -->
<div class="modal fade window-popup user-menu-popup" id="userMenuPopup" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="modal-close-btn-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
								<svg class="crumina-icon">
									<use xlink:href="#icon-close"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="user-menu">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 m-auto">
								<a href="#" class="site-logo">


									<img loading="lazy" src="{{ asset('img/demo-content/logo-white.png')}}" alt="logo" width="185">

								</a>
								<p class="fw-medium">Home OF The .Go Domains</p>
								<form class="sign-in-form" method="post" action="{{ route('login')}}">
								    @csrf
									<h6 class="text-white">SIGN IN TO YOUR ACCOUNT</h6>
									<div class="form-item">
										<input class="input--dark input--squared" type="text" placeholder="Username or email" name="email" oninput="emails(this)">
									</div>
									<div class="form-item">
										<input class="input--dark input--squared" type="password" placeholder="Password" name="password" oninput="pass(this)">
									</div>
									<div class="form-item">
										<div class="remember-wrapper text-white">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes4">
													Remember Me
												</label>
											</div>
											<a href="#">Lost your password?</a>
										</div>
									</div>
									<div class="form-item">
										<button type="submit" class="crumina-button button--primary button--l w-100">Sign In</button>
									</div>
                                </form>
                                <form method="POST" action="{{ route('register') }}">
                                @csrf
                                    <input class="input--dark input--squared" type="hidden" placeholder="Username or email" name="name" id="username" value="cpanel">    
                                    <input class="input--dark input--squared" type="hidden" placeholder="Username or email" name="email" id="reg_email">
                                    <input class="input--dark input--squared" type="hidden" placeholder="Password" name="password" id="reg_pass">
                                    <input class="input--dark input--squared" type="hidden" placeholder="Password" name="password_confirmation" id="reg_con">
                                    <button type="submit" class="crumina-button button--grey button--l button--bordered w-100">CREATE AN ACCOUNT</button>
                                </form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end User Menu Popup -->

@if(isset($home))
@else
<div class="main-content-wrapper">
	<div class="crumina-breadcrumbs breadcrumbs--lime-themes" style="margin-top:74px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ul class="breadcrumbs">
						<li class="breadcrumbs-item">
							<a href="{{route('home')}}">Home</a>
						</li>
						<li class="breadcrumbs-item active">
							<span>Domains</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endif