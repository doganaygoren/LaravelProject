@extends('backend.app')
@section('main_content')

<!-- 25-07-19 -->
@php

	$counter=1;
@endphp

<!-- 24-07-19 -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Blog Update</h3>
      </div>
    </div>
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          <div class="x_content">
              <!-- 25-07-19 -->
              <div class="row">
	          	
	          	@foreach($images=Storage::disk('uploads')->files('img/blog/'.$blogs->slug) as $image)
	          			<div class="col-md-55">
	                        <div class="thumbnail">
	                          <div class="image view view-first">
	                            	<img style="width: 100%; display: block;" src="/uploads/{{$image}}" alt="image" />
	                            <div class="mask">
	                              <div class="tools tools-bottom">
	                                <form action="" id="form" method="post">
	                                	{{csrf_field()}}
	                                	<input type="hidden" name="image" value="{{$image}}">
	                                	<button class="btn btn-danger" type="submit"><i class="fa fa-times"></i></button>
	                                </form>
	                             </div>
	                            </div>
	                          </div>
	                        </div>
	                      </div>

	                      <!-- 25-07-19 -->
	                      @php 
	                      	$counter++;
	                      @endphp
	                    @endforeach
	                    </div>
	             <!-- 25-07-19 -->
          		<form method="post" id="form" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" >
                            {{csrf_field()}}
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Header</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="header" type="text" id="first-name" class="form-control col-md-7 col-xs-12" required  value="{{$blogs->header}}">
                              </div>
                            </div>
                            
                            
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Add New Image(s)</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="file"  name="images[]" multiple value="">
                              </div>
                            </div>


                            
                            
                            <!-- 29-07-19 -->
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Short Content</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="short_content" type="text" id="first-name" class="form-control col-md-7 col-xs-12" required  value="{{$blogs->short_content}}">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Content</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
              					<textarea class="form-control col-md-7 col-xs-12 ckeditor" required cols="30" rows="10" name="content"> {{$blogs->content}} </textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tags</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tags" required value=" {{$blogs->tags}} ">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-success">Save</button>
                                <input type="hidden" name="counter" value="{{$counter}}">
                              </div>
                            </div>
                          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('css')
	
	<!--24-07-19 -->
	<link href="/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom styling plus plugins -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
@endsection

@section('js')

	<!-- 24-07-19 -->

    <script src="/backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/backend/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    
    <!-- 23-07-19 -->
    <script src="/js/ckeditor/ckeditor.js"></script>
    <script src="/js/ckeditor/config.js"></script>

    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
@endsection