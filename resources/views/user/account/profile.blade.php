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
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{$message}}</strong> 
        </div>
    @endif
   
    <div class="card" style="padding:10px;">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <br>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h3>My Profile</h3>        
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="{{route('account.profile_edit')}}">
                            <div style="float:right; cursor:pointer; background-color:yellowgreen; border-radius:50%; padding:5px;"><i class="material-icons" style=font-size:35px;>mode_edit</i></div>
                        </a>
                    </div>
                </div>
                <br>
                <form>
                    <div class="row">
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label for="exampleInputEmail1">Name: {{$user->name}}</label>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                        <label for="exampleInputPassword1">Email: {{$user->email}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                        <label for="exampleInputPassword1">Address: {{$user->address}}</label>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                        <label for="exampleInputPassword1">State/Province: {{$user->state}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                        <label for="exampleInputPassword1">City: {{$user->city}}</label>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                        <label for="exampleInputPassword1">Zip/Postal Code: {{$user->zip}}</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                        <label for="exampleInputPassword1">Phone Number: {{$user->phone}}</label>
                      </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
           </div>
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