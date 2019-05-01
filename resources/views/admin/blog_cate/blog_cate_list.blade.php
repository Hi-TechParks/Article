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