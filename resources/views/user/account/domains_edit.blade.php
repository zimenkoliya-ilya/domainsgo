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
         @if (count($errors) > 0)
            <div class = "alert alert-danger fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card" style="padding:10px;">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <br>
                    <form method="post" action="{{route('account.domains_upload', $domains->id)}}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6" >
                                <label for="exampleInputPassword1">Domain</label>
                                <p>{{$domains->domain}}.{{$domains->extention}}</p>
                            </div>
                            <div class="form-group col-md-6" >
                                <label for="exampleInputPassword1">Name</label>
                                <input type="name" class="form-control" id="name" placeholder="Name" name="name" value="{{$domains->name}}">
                            </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6" >
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{$domains->email}}">
                          </div>
                          <div class="form-group col-md-6" >
                                <label for="exampleInputPassword1">Status</label>
                                <div class="form-group">
                                    <select class="form-control" id="sel1" name="status">
                                        @if($domains->status == "private")
                                        <option value="private" selected>private</option>
                                        @else
                                        <option value="private">private</option>
                                        @endif
                                        @if($domains->status == "open")
                                        <option value="open" selected>open</option>
                                        @else
                                        <option value="open">open</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6" >
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" class="form-control" id="email" placeholder="Address" name="address" value="{{$domains->address}}">
                          </div>
                          <div class="form-group col-md-6" >
                            <label for="exampleInputPassword1">State</label>
                            <input type="text" class="form-control" id="state" placeholder="State" name="state" value="{{$domains->state}}">
                          </div>
                        </div>
                         <div class="row">
                          <div class="form-group col-md-6" >
                            <label for="exampleInputPassword1">City</label>
                            <input type="text" class="form-control" id="email" placeholder="City" name="city" value="{{$domains->city}}">
                          </div>
                          <div class="form-group col-md-6" >
                            <label for="exampleInputPassword1">ZIP</label>
                            <input type="text" class="form-control" id="zip" placeholder="ZIP" name="zip" value="{{$domains->zip}}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6" >
                            <label for="exampleInputPassword1">IP Address 1</label>
                            <input type="text" class="form-control" id="ns1" placeholder="IP Address 1" name="ns1" value="{{$domains->ns1}}">
                          </div>
                          <div class="form-group col-md-6" >
                            <label for="exampleInputPassword1">IP Address 2</label>
                            <input type="text" class="form-control" id="ns2" placeholder="IP Address 2" name="ns2" value="{{$domains->ns2}}">
                          </div>
                        </div>
                         <div class="row">
                          <div class="form-group col-md-6" >
                            
                          </div>
                          <div class="form-group col-md-6" >
                             <a style="float:right;">
                                <button type="submit" style="border-radius:50%;"><div><i class="material-icons" style=font-size:45px;>cloud_upload</i></div></button>
                            </a>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
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