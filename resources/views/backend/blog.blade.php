<!-- 22-07-19 -->
@extends('backend.app')
@section('main_content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Blog</h3>
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
            <h2>Blog Content</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <!-- 22-07-19 -->
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#blog-list" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Blog List</a>
                        </li>
                        <li role="presentation" class=""><a href="#add-blog" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Add Blog</a>
                        </li>
                      </ul>

                    <div id="myTabContent" class="tab-content">

                      <div role="tabpanel" class="tab-pane fade active in" id="blog-list" aria-labelledby="home-tab">

                        <table id="datatable-buttons" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Header</th>
                              <th>Author</th>
                              <th>Category</th>
                              <th>Hit</th>
                              <th>Number of Comments</th>
                              <th>Creation Date</th>
                              <th>Update Date</th>
                              <th colspan="2" style="text-align: center;">Operation</th>
                            </tr>
                          </thead>


                          <tbody>
                            <!-- 24-07-19 -->
                            @php

                              $place=1;

                            @endphp


                            @foreach($blogs as $blog)
                            <tr>
                              <td>{{$blog->header}}</td>
                              <td> {{$blog->author}} </td>
                              <td>{{$blog->category}}</td>
                              <td> {{$blog->hit}} </td>
                              <td></td>
                              <td>{{$blog->created_at}}</td>
                              <td>{{$blog->updated_at}}</td>
                              <td>
                                
                                <form action="" method="post" id="form" name="form">
                                  
                                  {{csrf_field()}}
                                  <input type="hidden" value="{{$blog->slug}}" name="slug">
                                  <input id="place" type="hidden" name="place" value=" {{$place}} ">
                                  <input type="submit" name="delete_btn" class="btn btn-danger" value="Delete">
                                </form>

                              </td>
                              <td>  
                                <a href="blog/blog-update/{{$blog->slug}}" class="btn btn-primary">Update</a> 
                              </td>
                            
                            </tr>
                            @php
                              $place++;
                            @endphp
                            @endforeach
                          </tbody>
                        </table>
                      </div>

                      <div role="tabpanel" class="tab-pane fade" id="add-blog" aria-labelledby="profile-tab">
                         
                         <form method="post" id="form" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" >
                            {{csrf_field()}}
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Header</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="header" type="text" id="first-name" class="form-control col-md-7 col-xs-12" required value="">
                              </div>
                            </div>
                            
                            <!-- 23-07-19 -->
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Images</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="file"  name="images[]" multiple>
                              </div>
                            </div>


                            <!--01-08-19 -->

                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Categories</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  
                                <select class="form-control" name="category">
                                  <option value="0">Upper Category</option>

                                  <!-- 01-08-19 -->
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

                            <!-- end of 01-08-19 -->
                             
                            <!-- 29-07-19 -->
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Short Content</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="short_content" type="text" id="first-name" class="form-control col-md-7 col-xs-12" required value="">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Content</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <!-- 23-07-19 -->
              <textarea class="form-control col-md-7 col-xs-12 ckeditor" cols="30" rows="10" name="content"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tags</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tags" required value="">
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
    
    <!-- 22-07-19 -->

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
@endsection

@section('css')

<!-- 22-07-19 -->

    <link href="/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

@endsection