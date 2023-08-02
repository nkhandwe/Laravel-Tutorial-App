@extends('partials.app')
@section('content')
    <div id="content" class="main-content">
        <!--  Navbar Starts / Breadcrumb Area  -->
        <div class="sub-header-container">
            <header class="header navbar navbar-expand-sm">
                <ul class="navbar-nav flex-row">
                    <li>
                        <div class="page-header">
                            <nav class="breadcrumb-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Website Settings</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>Website Settings</span></li>
                                </ol>
                            </nav>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">

                    <li class="ml-3">
                        <p class="current-time" id="currentTime"></p>
                        <p class="current-date" id="currentDate"></p>
                    </li>
                </ul>
            </header>
        </div>

        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">
                <!-- 4 Areas -->
                <div class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow mb-4">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Add or update Website Settings</h4>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="{{ route('admin.topic.add') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="widget-content widget-content-area">
                                <div class="w-100">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>App Name :</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="App Name">
                                            <span class="form-text text-muted">Please Add Website Name</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Mobile :</label>
                                            <input type="number" class="form-control" name="slug" id="slug"
                                                placeholder="Mobile Number">
                                            <span class="form-text text-muted">Add Phone Number</span>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Email :</label>
                                            <input type="email" class="form-control" name="name" id="name"
                                                placeholder="Email">
                                            <span class="form-text text-muted">Add Email Addrress</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Footer Text :</label>
                                            <input type="text" class="form-control" name="slug" id="slug"
                                                placeholder="Footer Text">
                                            <span class="form-text text-muted">Add a footer text display on website</span>
                                        </div>

                                    </div>
                                   

                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Header Image Add</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="attached-files">
                                                        <img id="image-preview" width="320">
                                                    </div>
                                                    <label for="file-upload" class="custom-file-upload mb-0">
                                                        <a title="Attach a file" class="mr-2 pointer text-primary">
                                                            <i class="las la-paperclip font-20"></i>
                                                            <span class="font-17">Click here to attach an image</span>
                                                        </a>
                                                    </label>
                                                    <input id="file-upload" name='header_image' type="file" accept="image/*"
                                                        style="display:none;" onchange="handleFileChange()">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="statbox widget mt-5 box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Footer Image Add</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="attached-files">
                                                        <img id="image-preview" width="320">
                                                    </div>
                                                    <label for="file-upload" class="custom-file-upload mb-0">
                                                        <a title="Attach a file" class="mr-2 pointer text-primary">
                                                            <i class="las la-paperclip font-20"></i>
                                                            <span class="font-17">Click here to attach an image</span>
                                                        </a>
                                                    </label>
                                                    <input id="file-upload" name='footer_image' type="file" accept="image/*"
                                                        style="display:none;" onchange="handleFileChange()">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-footer text-right">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                {{-- <button type="reset" class="btn btn-outline-primary">Reset</button> --}}
                            </div>
                        </form>

                    </div>
                </div>
            </div>

           
        @endsection
