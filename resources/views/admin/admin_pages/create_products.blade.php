<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="_token" content="{{csrf_token()}}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Title name</title>
  <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
    rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/ui/prism.min.css')}}">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/file-uploaders/dropzone.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
  <!-- END Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/ui/prism.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/file-uploaders/dropzone.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css" rel="stylesheet">

</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu"
  data-col="2-columns">
  <!-- fixed-top-->
  @include('admin.admin_include.ad_navbar')
  @include('admin.admin_include.ad_sidebar')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        {{-- Page Title --}}
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Add Products</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{route('admin.CreateProducts')}}">Add Products</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        {{-- Page Title --}}
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1"
              type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i>
              Settings</button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a
                class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic CKEditor start -->
        <section id="basic">
          @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has($msg))
            <div id="form-messages" class="alert alert-{{$msg}}" role="alert">
              {{ Session::get($msg) }}
            </div>
            @endif
          @endforeach
          {{-- card --}}
          <div class="card" style="">
            <div class="card-header">
              <h4 class="card-title">Basic Justified Tab</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <ul class="nav nav-tabs nav-justified">
                  <li class="nav-item">
                    <a class="nav-link active" id="Product-info" data-toggle="tab" href="#active" aria-controls="active"
                      aria-expanded="true">Product Info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" id="Product-Attributes" data-toggle="tab" href="#Tab-Product-Attributes"
                      aria-controls="link" aria-expanded="false">Product Attributes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" id="Product-Attributes" data-toggle="tab" href="#Tab-Product-Group-Attributes"
                      aria-controls="link" aria-expanded="false">Product Group Attributes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" id="Product-images" data-toggle="tab" href="#Tab-Product-images"
                      aria-controls="linkOpt">Product
                      Images</a>
                  </li>
                </ul>

                {{-- tab 1 --}}
                <div class="tab-content px-1 pt-1">
                  <div role="tabpanel" class="tab-pane active" id="active" aria-labelledby="Product-info" aria-expanded="true">
                    <form class="form form-horizontal form-bordered" method="POST" action="{{ url('/admin/AddProducts') }}"
                      id="MainForm">
                      {{csrf_field()}}
                      <div class="form-body">

                        @foreach($errors->all(':message') as $message)
                        <div id="form-messages" class="alert alert-danger" role="alert">
                          {{ $message }}
                        </div>
                        @endforeach

                        <h4 class="form-section"><i class="la la-eye"></i> Add Products</h4>
                        {{-- Row 1 --}}
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="ProductName">Product Name</label>
                              <div class="col-md-9">
                                <input type="text" id="ProductName" class="form-control border-primary" placeholder="Product Name"
                                  name="ProductName" required>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="ProductStatus">Product Status</label>
                              <div class="col-md-9">
                                <select name="ProductStatus" id="ProductStatus" class="form-control border-primary">
                                  <option value="1" default>Published</option>
                                  <option value="0">Not Published</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- Row 1 --}}
                        {{-- Row 2 --}}
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="ProductCode">Product Code</label>
                              <div class="col-md-9">
                                <input type="text" id="ProductCode" class="form-control border-primary" placeholder="Product Code"
                                  name="ProductCode" required>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="ProductCategory">Product Category</label>
                              {{-- {{var_dump($categories)}} --}}
                              <div class="col-md-9">
                                <select name="ProductCategory" id="ProductCategory" class="form-control border-primary">
                                  <option value="0" default>Select one</option>
                                  @foreach ($categories as $item)
                                    <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- Row 2 --}}
                        {{-- Row 3 --}}
                        {{-- Row 3 --}}
                        {{-- Row 4 --}}
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="ProductPrice">Product Price</label>
                              <div class="col-md-9">
                                <fieldset>
                                  <input type="number" class="form-control border-primary" id="ProductPrice" name="ProductPrice"
                                    placeholder="Product Price" required>
                                </fieldset>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="ProductDiscountedPrice">Product Discounted
                                Price</label>
                              <div class="col-md-9">
                                <fieldset>
                                  <input type="number" class="form-control border-primary" id="ProductDiscountedPrice"
                                    name="ProductDiscountedPrice" placeholder="Product Discounted Price" required>
                                </fieldset>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- Row 4 --}}
                        {{-- Row 5 --}}
                        <h4 class="form-section"><i class="la la-eye"></i>Product Details</h4>
                        <div class="row">
                          <div class="form-group row">
                            <textarea cols="30" rows="15" class="ckeditor" id="ProductDescription" name="ProductDescription"></textarea>
                          </div>
                        </div>
                        {{-- Row 5 --}}
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-actions right">
                              <button type="button" class="btn btn-warning mr-1">
                                <i class="ft-x"></i> Cancel
                              </button>
                              <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Save
                              </button>
                            </div>
                          </div>
                        </div>
                    </form>
                  </div>

                </div>
                {{-- tab 1 --}}



                {{-- Tab 4 --}}


                {{-- Submit buttons --}}
                {{-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-actions right">
                      <button type="button" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                      </button>
                      <button type="submit" class="btn btn-primary">
                        <i class="la la-check-square-o"></i> Save
                      </button>
                    </div>
                  </div>
                </div> --}}
                {{-- Submit buttons --}}

              </div> {{-- Card Body --}}
            </div> {{-- Card Content --}}
          </div> {{-- Card --}}

      </div>
    </div>
    </section>
    <!-- Basic CKEditor end -->

  </div>
  </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2"
          href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All
        rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>

  <!-- BEGIN VENDOR JS-->
  <script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{ asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/js/scripts/forms/form-repeater.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{ asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->

  <!-- BEGIN PAGE LEVEL JS-->

  <script src="{{ asset('app-assets/vendors/js/editors/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/js/scripts/editors/editor-ckeditor.js')}}" type="text/javascript"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
  <script>
    $(document).on('click', '.radiouncheck', function () {
      $('.radiouncheck').prop('checked', false);
      $(this).prop('checked', true);
    });

    $('#input-tags').tagsInput();
    $(document).ready(function () {
      $('#input-tags').keypress(function (e) {
        if (e.which == 13) {
          var arr = [];
          $('#input-tags_tagsinput .tag').each(function () {
            var text = $(this).find('span').text();
            arr.push(text);
          });
        }
      });
    });

    function validateForm() {
      var isValid = true;
      $('#MainForm').each(function () {
        if ($(this).val() === '')
          isValid = false;
      });
      return isValid;
    }
  </script>


  <script>
    var mydropz;
    Dropzone.options.dropzone = {
      url: '/image/upload/store',
      maxFilesize: 12,
      autoProcessQueue: false,
      acceptedFiles: ".jpeg,.jpg,.png,.gif",
      addRemoveLinks: true,
      timeout: 5000,
      parallelUploads: 6,
      renameFile: function (file) {
        var dt = new Date();
        var time = dt.getTime();
        return time + file.name;
      },
      init: function () {
        var submitButton = document.querySelector("#ImageSubmit")
        myDropzone = this; // closure

        submitButton.addEventListener("click", function () {
          myDropzone.processQueue(); // Tell Dropzone to process all queued files.
        });
      },
      removedfile: function (file) {
        var name = file.upload.filename;
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          },
          type: 'POST',
          url: '{{ url("image/delete") }}',
          data: {
            filename: name
          },
          success: function (data) {
            console.log("File has been successfully removed!!");
          },
          error: function (e) {
            console.log(e);
          }
        });
        var fileRef;
        return (fileRef = file.previewElement) != null ?
          fileRef.parentNode.removeChild(file.previewElement) : void 0;
      },
      success: function (file, response) {
        console.log(response);
      },
      error: function (file, response) {
        return false;
      }
    };
  </script>





  <!-- END PAGE LEVEL JS-->
</body>

</html>