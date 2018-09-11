<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

<body>

<!--Header-part-->
<div id="header">
  <h1><a href="{{ url('admin/dashboard')}}">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li>

          <!-- <a href="login.html"><i class="icon-key"></i> Log Out</a> -->

          <a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                                                     <i class="icon-key"></i>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                                      
                                      @csrf
                                    </form>

        </li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="{{ url('admin/settings')}}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>

    <li class="">
      <a href="#" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" class="dropdown-item">
               <i class="icon icon-share-alt"></i>
                                        Logout
                                    </a>

                  <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">

                    @csrf
                   </form>
    </li>
     
     

  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
@include('admin.includes.sidebar')
<!--sidebar-menu-->

<!--main-container-part-->
@yield('content')

<!--end-main-container-part-->

<!--Footer-part-->

@include('admin.includes.footer')

<!--end-Footer-part-->


</script>

<script src="{{ asset('admin_panel/assets/js/jquery.min.js') }}"></script> 
<script src="{{ asset('admin_panel/assets/js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('admin_panel/assets/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('admin_panel/assets/js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('admin_panel/assets/js/select2.min.js') }}"></script> 
<script src="{{ asset('admin_panel/assets/js/jquery.validate.js') }}"></script> 
<script src="{{ asset('admin_panel/assets/js/matrix.js') }}"></script> 
<script src="{{ asset('admin_panel/assets/js/matrix.form_validation.js') }}"></script>


</body>
</html>
