                    @extends('admin.layouts.master')
                    @section('content')
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                                            <li class="breadcrumb-item active">List</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Blog Category List</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <!-- Message Display -->
                                        @include('admin.inc.message')
                                        <!-- Message Display -->

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add</button>

                                        <!-- sample modal content -->
                                        <div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <form class="form-horizontal" action="{{ url('/admin/blog/category/store') }}" method="post">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Add Blog Category</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                        @csrf

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Category Title</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="title" placeholder="Category Title"  value="{{ old('title') }}" required>

                                                                @if ($errors->has('title'))
                                                                    <span class="text-danger">
                                                                        <strong>{{ $errors->first('title') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Category Details</label>
                                                            <div class="col-sm-8">
                                                                <textarea class="form-control" name="description" rows="8">{{ old('description') }}</textarea>

                                                                @if ($errors->has('description'))
                                                                    <span class="text-danger">
                                                                        <strong>{{ $errors->first('description') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                            
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                                </form>

                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                    </div>
                                    
                                    <div class="card-body">

                                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                            @foreach( $blog_categories as $blog_category )
                                                <tr>
                                                    <td>{{ $blog_category->title }}</td>
                                                    <td>{{ $blog_category->description }}</td>
                                                    <td>
                                                        @if( $blog_category->status == 1 )
                                                        Active
                                                        @else
                                                        Inactive
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/admin/blog/category/edit/{{ $blog_category->id }}" class="btn btn-primary">Edit</a>
                                                        <a href="/admin/blog/category/delete/{{ $blog_category->id }}" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->
                    @endsection