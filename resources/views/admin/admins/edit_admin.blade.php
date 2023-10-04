@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Admins / Sub-Admins</a> <a href="#" class="current">Edit Admin / Sub-Admin</a> </div>
    <h1>Admins / Sub-Admins</h1>
    @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif   
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Admin / Sub-Admin</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('admin/edit-admin/'.$adminDetails->id) }}" name="add_admin" id="add_admin" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Type</label>
                <div class="controls">
                  <input type="text" name="type" id="type" readonly="" value="{{ $adminDetails->type }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Username</label>
                <div class="controls">
                  <input type="text" name="username" id="username" readonly="" value="{{ $adminDetails->username }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                  <input type="password" name="password" id="password" required="">
                </div>
              </div>
              @if($adminDetails->type=="Sub Admin")   
              <div class="control-group">
                <label class="control-label">Access</label>
                <div class="controls">
                  <input type="checkbox" name="categories_view_access" id="categories_view_access" value="1" style="margin-top: -3px;" @if($adminDetails->categories_view_access == "1") checked @endif>&nbsp;Categories View Only&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="categories_edit_access" id="categories_edit_access" value="1" style="margin-top: -3px;" @if($adminDetails->categories_edit_access == "1") checked @endif>&nbsp;Categories View & Edit&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="categories_full_access" id="categories_full_access" value="1" style="margin-top: -3px;" @if($adminDetails->categories_full_access == "1") checked @endif>&nbsp;Categories View, Edit & Delete&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="products_access" id="products_access" value="1" style="margin-top: -3px;"  @if($adminDetails->products_access == "1") checked @endif>&nbsp;Products&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="orders_access" id="orders_access" value="1" style="margin-top: -3px;"  @if($adminDetails->orders_access == "1") checked @endif>&nbsp;Orders&nbsp;&nbsp;&nbsp;
                  <input type="checkbox" name="users_access" id="users_access" value="1" style="margin-top: -3px;"  @if($adminDetails->users_access == "1") checked @endif>&nbsp;Users
                </div>
              </div>    
              @endif       
              <div class="control-group">
                <label class="control-label">Enable</label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1" @if($adminDetails->status == "1") checked @endif>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Edit Admin" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection