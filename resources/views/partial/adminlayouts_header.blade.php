
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 {{-- csrf token tag --}}
<meta name="csrf-token"   content="{{csrf_token()}}">
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <title>School Management</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  {{-- for jquery --}}
  <!-- <script src="{{asset('admin/js/academy-info.js')}}"></script> -->
 <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
 
  <!-- iconfonts:css -->
  <link rel="stylesheet" href="{{asset('admin/vendors/iconfonts/font-awesome/css/font-awesome.css')}}">

  <link rel="stylesheet"   href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.addons.css')}}">
  
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
 <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
  
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
</head>
