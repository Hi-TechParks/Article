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
                                            <li class="breadcrumb-item"><a href="#">Simulor</a></li>
                                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                            <li class="breadcrumb-item active">General</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">General Elements</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            This is a success alert—check it out!
                                        </div>
                                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            This is a danger alert—check it out!
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <h4 class="header-title">Input Types</h4>
            
                                        <form class="form-horizontal">

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="placeholder" value="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="example-email">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" placeholder="placeholder" value="password">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Text area</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Readonly</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" readonly="" value="Readonly value">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Disabled</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" disabled="" value="Disabled value">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Helping text</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Helping text">
                                                    <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Input Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Multiple select</label>
                                                <div class="col-sm-10">
                                                    <select multiple class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Default file input</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="date" name="date">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Time</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="time" name="time">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" name="number">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">URL</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="url" name="url">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Search</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="search" name="search">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tel</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="tel" name="tel">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Color</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="color" name="color">
                                                </div>
                                            </div>
            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Range</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="range" name="range" min="0" max="10">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Custom file input</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Checkbox</label>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Radio</label>
                                                <div class="col-sm-10">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Select menu</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Select menu</label>
                                                <div class="col-sm-10">
                                                    <select class="wide" data-plugin="customselect">
                                                        <option value="0">Nothing</option>
                                                        <option value="1">Some option</option>
                                                        <option value="2">Another option</option>
                                                        <option value="3" disabled>A disabled option</option>
                                                        <option value="4">Potato</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Single Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select2" data-toggle="select2">
                                                        <option>Select</option>
                                                        <optgroup label="Mountain Time Zone">
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                        </optgroup>
                                                        <optgroup label="Central Time Zone">
                                                            <option value="AL">Alabama</option>
                                                            <option value="AR">Arkansas</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Multiple Select</label>
                                                <div class="col-sm-10">
                                                    <select class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                                        <option>Select</option>
                                                        <optgroup label="Mountain Time Zone">
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                        </optgroup>
                                                        <optgroup label="Central Time Zone">
                                                            <option value="AL">Alabama</option>
                                                            <option value="AR">Arkansas</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Date Range</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Single Date Picker</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control date" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">CK Editor</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="content" rows="8"></textarea>
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