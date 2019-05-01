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
                                            <li class="breadcrumb-item active">Create</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Blog Category Create</h4>
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
                                        <form class="form-horizontal" action="{{ url('/admin/blog/category/store') }}" method="post">
                                            @csrf

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Category Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="title" placeholder="Category Title"  value="{{ old('title') }}" required>

                                                    @if ($errors->has('title'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Category Details</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="description" rows="8">{{ old('description') }}</textarea>

                                                    @if ($errors->has('description'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
            
                                        </form>
            
                                    </div> <!-- end card-box -->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->
                    @endsection