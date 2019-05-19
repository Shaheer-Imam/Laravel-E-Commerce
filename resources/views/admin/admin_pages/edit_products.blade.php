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

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/ui/prism.min.css')}}">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">
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
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

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
                <li class="breadcrumb-item"><a href="/admin">Home</a>
                </li>
                <li class="breadcrumb-item active"><a href="/admin/CreateProducts">Add Products</a>
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
                    <a class="nav-link" id="Product-Options" data-toggle="tab" href="#Tab-Product-Options"
                      aria-controls="link" aria-expanded="false">Product Options</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="Product-images" data-toggle="tab" href="#Tab-Product-images" aria-controls="linkOpt">Product
                      Images</a>
                  </li>
                </ul>
                {{-- tab 1 --}}
                <div class="tab-content px-1 pt-1">
                  <div role="tabpanel" class="tab-pane active" id="active" aria-labelledby="Product-info" aria-expanded="true">
                    <form class="form form-horizontal form-bordered" method="POST" action="{{ url('admin/UpdateProduct/'.$myproduct->product_id) }}"
                      id="MainForm">
                      {{csrf_field()}}
                      <div class="form-body">

                        <h4 class="form-section"><i class="la la-eye"></i> Add Products</h4>
                        {{-- Row 1 --}}
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-3 label-control" for="ProductName">Product Name</label>
                              <div class="col-md-9">
                                <input type="text" id="ProductName" class="form-control border-primary" placeholder="Product Name"
                                  name="ProductName" required value="{{$myproduct->product_name}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="ProductStatus">Product Status</label>
                              <div class="col-md-9">
                                <select name="ProductStatus" id="ProductStatus" class="form-control border-primary">
                                  @if ($myproduct->product_status == 0)
                                  <option value="1">Published</option>
                                  <option value="0" selected>Not Published</option>
                                  @else
                                  <option value="1" selected>Published</option>
                                  <option value="0">Not Published</option>
                                  @endif
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
                                  name="ProductCode" required value="{{$myproduct->product_code}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-3 label-control" for="ProductCategory">Product Category</label>
                              {{-- {{var_dump($categories)}} --}}
                              <div class="col-md-9">
                                <select name="ProductCategory" id="ProductCategory" class="form-control border-primary">
                                  <option value="0">Select Category</option>
                                  @foreach ($categories as $item)
                                    @if ($item->category_id == $myproduct->category_id)
                                    <option value="{{$item->category_id}}" selected>{{$item->category_name}}</option>
                                    @else
                                    <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                    @endif
                                  @endforeach

                                  {{-- @foreach ($categories as $item)
                                  <option value="{{$item->Category_name_id}}">{{$item->Catgory_name}}</option>
                                  @endforeach --}}
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
                                    placeholder="Product Price" required value="{{$myproduct->product_price}}">
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
                                    name="ProductDiscountedPrice" placeholder="Product Discounted Price" required value="{{$myproduct->product_discounted_price}}">
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
                            <textarea cols="50" rows="15" class="ckeditor" id="ProductDescription" name="ProductDescription">{{$myproduct->product_description}}</textarea>
                          </div>
                        </div>

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

                {{-- Tab 3 --}}
                <div class="tab-pane" id="Tab-Product-Options" role="tabpanel" aria-labelledby="Product-Options"
                  aria-expanded="false">
                  <div class="tab-content px-1">
                    <div role="tabpanel" class="tab-pane active" id="tabVerticalLeft11" aria-expanded="true"
                      aria-labelledby="baseVerticalLeft1-tab1">
                      <form class="form form-horizontal form-bordered" method="POST" action="{{ route('saveAttributeOptions') }}"
                        id="MainForm">
                        {{csrf_field()}}
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-3" style="display:none;">
                              <input type="text" id="ProductID" class="form-control border-primary ProductNumber"
                                placeholder="Product ID" name="ProductID" required value="" placeholder="">
                            </div>
                            <div class="col-md-3">
                              <div class="row">
                                <div class="col-md-4" style="padding-top:5px;">
                                  <label for="">Attribute Name</label>
                                </div>
                                <div class="col-md-8">
                                  <select name="AttributeID" id="AttributeID" class="form-control AttributeID border-primary">
                                    <option value="0">Select Any One</option>
                                    @foreach ($attributes as $attribute)
                                    <option value="{{$attribute->attributes_id}}">{{$attribute->attributes_name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="row">
                                <div class="col-md-4" style="padding-top:5px;">
                                  <label for="">Option Name</label>
                                </div>
                                <div class="col-md-8">
                                  <select name="OptionID" id="OptionID" class="form-control OptionID border-primary">
                                    <option value="0">Please select Attribute First</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="row">
                                <div class="col-md-4" style="padding-top:5px;">
                                  <label for="">Additional Price</label>
                                </div>
                                <div class="col-md-8">
                                  <input name="AdditionalPrice" id="AdditionalPrice" class="form-control border-primary"
                                    placeholder="Additional Price">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-1">
                                <button type="button" id="saveProductOptions" class="btn btn-primary">
                                  <i class="la la-check-square-o"></i> Save
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>

                      <div class="table-responsive">
                        <table class="datatable mdl-data-table dataTable" cellspacing="0" width="100%" role="grid"
                          style="width: 100%;">
                          <thead>
                            <tr>
                              <th>Attribute Name</th>
                              <th>Option Name</th>
                              <th>Additional Price</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>

                    </div>

                  </div>

                </div>
                {{-- Tab 3 --}}
                {{-- Tab 4 --}}
                <div class="tab-pane" id="Tab-Product-images" role="tabpanel" aria-labelledby="Product-images"
                  aria-expanded="false">
                  <div class="row">
                    <div class="col-md-12">
                      <h4 class="form-section"><i class="ft-mail"></i> Add Multiple image using Dropzone</h4>
                      <div class="dropzone dropzone-area dz-clickable" id="dropzone">
                        <div class="dz-message">Drop Files Here To Upload</div>
                      </div>
                    </div>
                  </div>
                  {{-- <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data" class="dropzone dropzone-area dz-clickable"
                    id="dropzone">
                  </form> --}}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-actions center">
                        <button type="button" id="ImageSubmit" class="btn btn-block btn-primary mr-1">
                          <i class="la la-check-square-o"></i> Upload Images
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- Tab 4 --}}

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
  {{--
  var hash = window.location.hash;
  $(document).ready(function () {
  $('.nav-link').each(function (index) {
  if($(this).hasClass('active') == true)
  {
  $(this).removeClass('active');
  $(this).removeClass('nav-link-expand');
  }
  $(this).attr('aria-expanded',false);
  });
  $(hash).addClass('nav-link-expand');
  $(hash).attr('aria-expanded',true);
  $(hash).addClass('active');
  }); --}}
  {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
  <script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('app-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="{{ asset('app-assets/vendors/js/editors/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/js/scripts/editors/editor-ckeditor.js')}}" type="text/javascript"></script>
  <script>
    $(function () {

      var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
      ];
      $("#tags").autocomplete({
        source: availableTags
      });
    });
  </script>

  <script>
    var ProductID = location.pathname;
    ProductID = ProductID.split('/');
    var length = ProductID.length;
    ProductID = ProductID[length - 1];
    $('.ProductNumber').val(ProductID);
    console.log(ProductID);

    $(document).ready(function () {
      var url = "http://127.0.0.1:8000/admin/api/ProductAttributes/" + ProductID;
      console.log(url);

      $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: url,
        method: "get",
        success: function () {
          console.log('Success');
        },
        error: function () {
          console.log('Success');
        },
      });
    });


    var mydropz;
    var MyProducts;
    Dropzone.options.dropzone = {
      url: '/image/upload/store',
      maxFilesize: 12,
      autoProcessQueue: false,
      acceptedFiles: ".jpeg,.jpg,.png,.gif",
      addRemoveLinks: true,
      data: {
        "umer": "header value"
      },
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

        $.post("/image/getproductimages", {
          productid: ProductID
        }, function (data) {
          data.forEach(function (product) {
            console.log(product);
            var mockFile = {
              name: product.product_image_link,
              size: product.product_image_size
            };
            myDropzone.emit("addedfile", mockFile);
            myDropzone.emit("thumbnail", mockFile, "/images/" + product.product_image_link);
            //myDropzone.createThumbnailFromUrl(file, imageUrl, callback, crossOrigin);
            // Make sure that there is no progress bar, etc...
            myDropzone.emit("complete", mockFile);
            var existingFileCount = 1; // The number of files already uploaded
            myDropzone.options.maxFiles = myDropzone.options.maxFiles - existingFileCount;
          })
        });

        submitButton.addEventListener("click", function () {
          myDropzone.processQueue(); // Tell Dropzone to process all queued files.
        });
        this.on("sending", function (file, xhr, formData) {
          formData.append("ProductID", ProductID);
          console.log(formData);
        });

      }, // Init Function 
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

  <script>
    $(document).on('change', '#AttributeID', function () {
      var attributeid = $('#AttributeID').val();
      //      alert(attributeid);
      let url = '/admin/api/getOptionsbyAttribute/' + attributeid;
      console.log('url', url);
      if (attributeid != 0) {
        $.get(url, function (data, status) {
          $('#OptionID').html('');
          var options = [];
          for (var i = 0; i < data.length; i++) {
            options += "<option value=" + data[i].option_id + ">" + data[i].option_name + "</option>";
          }
          $('#OptionID').append(options);
        });
      } else {

        $('#OptionID').html('<option value="0">Please select Attribute First</option>');
      }
    });
  </script>
  <script>
    $('#saveProductOptions').click(function () {
      $.ajax({
        type: 'POST',
        data: {
          AdditionalPrice: $('#AdditionalPrice').val(),
          OptionID: $('#OptionID').val(),
          AttributeID: $('#AttributeID').val(),
          ProductID: $('#ProductID').val()
        },
        url: '{{route("saveAttributeOptions")}}',
        success: function (response) {
          console.log(response);
          $('#OptionID').val('');
          $('#AttributeID').val('');
          $('#AdditionalPrice').val('');
          $('.datatable').DataTable().ajax.reload();
        }
      });
    });
  </script>


  <!-- END PAGE LEVEL JS-->
</body>

</html>