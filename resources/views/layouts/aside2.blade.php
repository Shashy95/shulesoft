<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">
    
        <style>
            .sibebarEma {
                background:url({{url('assets/img/logo.png')}}) center center no-repeat;
                background-size: cover;
            }
        </style>
        
        
        <!-- User menu -->
        <div class="sidebar-section">
            <div class="sibebarEma">
                <div class="sidebar-section-body">
                    <div class="d-flex">
                        <div class="flex-1">
                            <button type="button"
                                class="btn btn-outline-light border-transparent btn-icon btn-sm rounded-pill">
                                <i class="icon-wrench"></i>
                            </button>
                        </div>
                        <a href="#" class="flex-1 text-center"></a>
                        <div class="flex-1 text-right">
                            <button type="button"
                                class="btn btn-outline-light border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="icon-transmission"></i>
                            </button>

                            <button type="button"
                                class="btn btn-outline-light border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                                <i class="icon-cross2"></i>
                            </button>
                        </div>
                    </div>


                    <div class="text-center">
                        <h6 class="mb-0 text-white text-shadow-dark mt-3"></h6>
                        <span class="font-size-sm text-white text-shadow-dark"></span>
                    </div>
                </div>

                <div class="sidebar-user-material-footer">
                    <a href="#user-nav"
                        class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle"
                        data-toggle="collapse"><span>My account</span></a>
                </div>
            </div>

            <div class="collapse border-bottom" id="user-nav">
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-user-plus"></i>
                            <span>My profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-coins"></i>
                            <span>My balance</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-comment-discussion"></i>
                            <span>Messages</span>
                            <span class="badge badge-teal badge-pill align-self-center ml-auto">58</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-cog5"></i>
                            <span>Account settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- <a href="{{ route('logout') }}" class="nav-link">
                    <i class="icon-switch2"></i>
                    <span>Logout</span>
                </a> -->
                        <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs mt-1">Main</div> <i class="icon-menu"
                        title="Main"></i>
                </li>

                <li class="nav-item">
                    <a href="{{url('home')}}" class="nav-link  {{ request()->is('home') ? 'active' : '' }}">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>

                 @if(auth()->user()->role != 'Admin')
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('product') ? 'active' : '' }}"
                            href="{{ url('product') }}"> <i class="icon-basket"></i> Products</a>
                </li>
                @endif

                @can('view-product')

<li class="nav-item nav-item-submenu">
            <a href="#"
                class="nav-link {{ request()->is('product*') ? 'active' : '' }}">
                <i class="icon-basket"></i>Manage Products</a>
            <ul class="nav nav-group-sub">

                <li class="nav-item"><a
                            class="nav-link {{ request()->is('product_category*') ? 'active' : '' }}"
                            href="{{ url('product_category') }}">Product Category</a></li>
                
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('product*') ? 'active' : '' }}"
                            href="{{ url('product') }}">Products</a></li>

                   
            

                                    </ul>
                                </li>
                            @endcan
                          


                @can('view-orders')
                       
                <li class="nav-item">
                          <a class="nav-link {{ (request()->is('product_list*')) ? 'active' : ''  }}" href="{{url('product_list')}}"><i class="icon-cart"></i> <span>Make Order</span></a></li>
                              
                          </li>   

                          <li class="nav-item">
                          <a class="nav-link {{ (request()->is('orders/orders*')) ? 'active' : ''  }}" href="{{url('orders/orders')}}"><i class="icon-cart"></i> <span>Orders</span></a></li>
                              
                          </li>

                          <li class="nav-item">
                          <a class="nav-link {{ (request()->is('orders/order_payment*')) ? 'active' : ''  }}" href="{{url('orders/order_payment')}}"><i class="icon-cart"></i> <span>Payments</span></a></li>
                              
                          </li>
                          @endcan

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
