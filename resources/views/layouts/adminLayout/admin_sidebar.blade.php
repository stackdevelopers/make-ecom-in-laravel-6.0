<?php $url = url()->current(); ?>
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li <?php if (preg_match("/dashboard/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/dashboard') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    @if(Session::get('adminDetails')['categories_full_access']==1)
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span> <span class="label label-important">2</span></a>
      <ul <?php if (preg_match("/categor/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/add-category/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/add-category')}}">Add Category</a></li>
        <li <?php if (preg_match("/view-categories/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-categories')}}">View Categories</a></li>
      </ul>
    </li>
    @else
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span> <span class="label label-important">2</span></a>
      <ul <?php if (preg_match("/categor/i", $url)){ ?> style="display: block;" <?php } ?>>
        @if(Session::get('adminDetails')['categories_edit_access']==1)
        <li <?php if (preg_match("/add-category/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/add-category')}}">Add Category</a></li>
        @endif
        @if(Session::get('adminDetails')['categories_view_access']==1)
        <li <?php if (preg_match("/view-categories/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-categories')}}">View Categories</a></li>
        @endif
      </ul>
    </li>
    @endif
    @if(Session::get('adminDetails')['products_access']==1)
     <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Products</span> <span class="label label-important">2</span></a>
      <ul <?php if (preg_match("/product/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/add-product/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/add-product')}}">Add Product</a></li>
        <li <?php if (preg_match("/view-products/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-products')}}">View Products</a></li>
      </ul>
    </li>
    @endif
    @if(Session::get('adminDetails')['type']=="Admin")
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Coupons</span> <span class="label label-important">2</span></a>
      <ul <?php if (preg_match("/coupon/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/add-coupon/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/add-coupon')}}">Add Coupon</a></li>
        <li <?php if (preg_match("/view-coupons/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-coupons')}}">View Coupons</a></li>
      </ul>
    </li>
    @endif
    @if(Session::get('adminDetails')['orders_access']==1)
    <?php 
       $base_order_url = trim(basename($url));
    ?>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Orders</span> <span class="label label-important">1</span></a>
      <ul <?php if (preg_match("/orders/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if ($base_order_url=="view-orders"){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-orders')}}">View Orders</a></li>
        <li <?php if ($base_order_url=="view-orders-charts"){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-orders-charts')}}">View Orders Charts</a></li>
      </ul>
    </li>
    @endif
    @if(Session::get('adminDetails')['type']=="Admin")
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Banners</span> <span class="label label-important">2</span></a>
      <ul <?php if (preg_match("/banner/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/add-banner/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/add-banner')}}">Add Banner</a></li>
        <li <?php if (preg_match("/view-banners/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-banners')}}">View Banners</a></li>
      </ul>
    </li>
    @endif
    @if(Session::get('adminDetails')['users_access']==1)
    <?php 
       $base_user_url = trim(basename($url));
    ?>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Users</span> <span class="label label-important">1</span></a>
      <ul <?php if (preg_match("/users/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if ($base_user_url=="view-users"){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-users')}}">View Users</a></li>
        <li <?php if ($base_user_url=="view-users-charts"){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-users-charts')}}">View Users Charts</a></li>
      </ul>
    </li>
    @endif
    @if(Session::get('adminDetails')['type']=="Admin")
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Admins/Sub-Admins</span> <span class="label label-important">2</span></a>
      <ul <?php if (preg_match("/admins/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/add-admin/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/add-admin')}}">Add Admin/Sub-Admin</a></li>
        <li <?php if (preg_match("/view-admins/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-admins')}}">View Admins/Sub-Admins</a></li>
      </ul>
    </li>
    @endif
    @if(Session::get('adminDetails')['type']=="Admin")
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>CMS Pages</span> <span class="label label-important">2</span></a>
      <ul <?php if (preg_match("/cms-page/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/add-cms-page/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/add-cms-page')}}">Add CMS Page</a></li>
        <li <?php if (preg_match("/view-cms-pages/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-cms-pages')}}">View CMS Pages</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Enquiries</span> <span class="label label-important">1</span></a>
      <ul <?php if (preg_match("/enquiries/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/view-enquiries/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-enquiries')}}">View Enquiries</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Currencies</span> <span class="label label-important">2</span></a>
      <ul <?php if (preg_match("/currencies/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/add-currency/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/add-currency')}}">Add Currency</a></li>
        <li <?php if (preg_match("/view-currencies/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-currencies')}}">View Currencies</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Shipping</span> <span class="label label-important">1</span></a>
      <ul <?php if (preg_match("/shipping/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/view-shipping/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-shipping')}}">Shipping Charges</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Newsletter Subscribers</span> <span class="label label-important">1</span></a>
      <ul <?php if (preg_match("/newsletter-subscribers/i", $url)){ ?> style="display: block;" <?php } ?>>
        <li <?php if (preg_match("/newsletter-subscribers/i", $url)){ ?> class="active" <?php } ?>><a href="{{ url('/admin/view-newsletter-subscribers')}}">Newsletters</a></li>
      </ul>
    </li>
    @endif
  </ul>
</div>
<!--sidebar-menu-->