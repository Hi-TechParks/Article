                                        @if(Session::has('success'))
                                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ Session::get('success') }}
                                        </div>
                                        @endif

                                        @if(Session::has('error'))
                                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ Session::get('error') }}
                                        </div>
                                        @endif