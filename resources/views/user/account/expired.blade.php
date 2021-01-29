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
    <div class="card" style="padding:10px; padding-bottom:50px; ">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <br>
                <h3>Expiring/Expired</h3>
                <table class="table--style3" style="position: relative;margin-bottom:0px;">
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th> 
                        <th></th> 
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Domain</td>
                        <td>Expiration</td>
                        <td>Price</td> 
                        <td>Action</td> 
                    </tr>
                    @if($domains)
                    @foreach($domains as $temp)
                        <?php 
                            $now = time();
                            $expired_date = strtotime($temp->experation_date);
                            $interval = $expired_date - $now;
                            $date = $interval/86400;
                        ?>
                        
                        @if($date<30)
                        <tr>
                            <td>{{$temp->domain}}.{{$temp->extention}}</td>
                            <td>
                                {{$temp->experation_date}}
                            </td>
                            <td>${{$temp['price']}}</td>
                            <td>
                                <a href="{{ route('account.expired.update', $temp->id)}}" class="crumina-button button--green button--xs">Renew</a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                    @else
                        <h3 style="text-align:center; margin-top:30px;">You have not your domain.</h3>
                    @endif
                </table>
            </div>
            <div class="col-md-1"></div>
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