@extends('include.master')
@section('title','account|dashboard')
@section('css')
<style>
 .sticky-offset {
    top: 56px;
}

#body-row {
    margin-left:0;
    margin-right:0;
}
#sidebar-container {
    min-height: 70vh;   
    background-color: #333;
    padding: 0;
}

/* Sidebar sizes when expanded and expanded */
.sidebar-expanded {
    width: 230px;
}
.sidebar-collapsed {
    width: 60px;
}

/* Menu item*/
#sidebar-container .list-group a {
    height: 50px;
    color: white;
}

/* Submenu item*/
#sidebar-container .list-group .sidebar-submenu a {
    height: 45px;
    padding-left: 30px;
}
.sidebar-submenu {
    font-size: 0.9rem;
}

/* Separators */
.sidebar-separator-title {
    background-color: #333;
    height: 35px;
}
.sidebar-separator {
    background-color: #333;
    height: 25px;
}
.logo-separator {
    background-color: #333;    
    height: 60px;
}

/* Closed submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
  content: " \f0d7";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
/* Opened submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
  content: " \f0da";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
</style>
@endsection
@section('content')
 <div class="row" id="body-row">
    @include('include.account_sidebar')

    <!-- MAIN -->
<div class="col py-3 bg-grey">
    <div class="card" style="padding:10px;">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <br>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h5 style="margin-bottom:0px;">Hello! {{auth()->user()->email}}</h5>
                        <span>Domains.go member: {{auth()->user()->created_at}}</span> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h5 style="margin-bottom:0px;">Account Balance</h5>
                        <span>$10.97</span>  
                    </div>
                </div>
                <div class="row" style="margin-top:30px;">
        			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 m-auto align-center">
        				<h1 class="page-title text-black">FIND A GREAT .GO DOMAIN</h1>
        				<h5>Your digital success story starts here.</h5>
        				<form class="mt-5 mb-4" action="{{ route('search')}}" method="get">
        					<div class="input-btn--inline">
        						<input class="input--black" type="text" placeholder="Choose your new .GO Domain" name="domain">
        						<button type="submit" class="crumina-button button--dark button--l">Check It</button>
        					</div>
        				</form>
        			</div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
        </div>
    </div>
    <!-- Main Col END -->

</div>   
 

@endsection
@section('script')
<script>
$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}
</script>
@endsection