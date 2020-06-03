<!-- 31-07-19 -->
@extends('backend.app')
@section('main_content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Categories</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
          <div class="x_title">
            <h2>Category Contents</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
               </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        
                        <!-- 01-08-19 -->
                        <li role="presentation" class="active"><a href="#category-list" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Category List</a>
                        </li>
                        <li role="presentation" class=""><a href="#add-category" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Add Category</a>
                        </li>
                      </ul>

                      <div id="myTabContent" class="tab-content">

                      <div role="tabpanel" class="tab-pane fade active in" id="category-list" aria-labelledby="home-tab">

                        <!-- 01-08-19 -->
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Category Name</th>
                              <th>Upper Category ID</th>
                              <th>Operation</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($category_list as $category)
                            <tr>
                              <th scope="row">{{$category->id}}</th>
                              <td>{{$category->category_name}}</td>
                              <td>{{$category->upper_category}}</td>
                              <td>
                              <!-- 01-08-19 -->
                              <form action="" method="post" id="form" name="form">  
                                {{csrf_field()}}
                                <input type="hidden" value="{{$category->id}}" name="id">
                                <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                              </form>
                              
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        
                      </div>

                      <div role="tabpanel" class="tab-pane fade" id="add-category" aria-labelledby="profile-tab">
                         <form method="post" id="form" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" >
                            {{csrf_field()}}
                            
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Categories</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  
                                <select class="form-control" name="upper_category">
                                  <option value="0">Upper Category</option>

                                  <!-- 31-07-19 -->
                                  @foreach($categories as $category)

                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @foreach($category->children as $sub_category)

                                      <option value="{{$sub_category->id}}">{{$category->category_name}}-->{{$sub_category->category_name}}</option>

                                      @foreach($sub_category->children as $sub_sub_category)

                                      <option value="{{$sub_sub_category->id}}">{{$category->category_name}}-->{{$sub_category->category_name}}-->{{$sub_sub_category->category_name}}</option>

                                      @endforeach

                                    @endforeach
                                  
                                  @endforeach
                                </select>

                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="category_name" type="text" id="first-name" class="form-control col-md-7 col-xs-12" required="required" value="">
                              </div>
                            </div>



                            <div class="form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-success">Save</button>
                              </div>
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>


                    <p class="text-muted font-13 m-b-30">
                      <!--The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                      -->
                    </p>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>


             

@endsection

@section('js')
    
    
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
@endsection

@section('css')


    <link href="/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

@endsection