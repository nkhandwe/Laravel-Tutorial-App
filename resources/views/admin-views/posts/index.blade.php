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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Post</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>Post</span></li>
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
                                    <h4>Add New Post</h4>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="{{ route('admin.post.add') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="widget-content widget-content-area">
                                <div class="w-100">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Title :</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Title">
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Slug :</label>
                                            <input type="text" class="form-control" name="slug" id="slug"
                                                placeholder="Slug">
                                            <span class="form-text text-danger">**Please dont enter slug its auto
                                                generated</span>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <label>Content :</label>
                                        <textarea class="form-control ckeditor" name="content"></textarea>
                                    </div>
                                    <div class="form-group mt-5 row">

                                        <div class="col-lg-4">
                                            <label for="exampleSelect1">Select Category
                                                <span class="text-danger">*</span></label>
                                            <select class="form-control" name="category_id" id="exampleSelect1">
                                                @foreach ($category as $cate)
                                                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="exampleSelect1">Select Sub-Category
                                                <span class="text-danger">*</span></label>
                                            <select class="form-control" name="subcategory_id" id="exampleSelect1">
                                                @foreach ($subcate as $subcate)
                                                    <option value="{{ $subcate->id }}">{{ $subcate->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="exampleSelect1">Select Topic
                                                <span class="text-danger">*</span></label>
                                            <select class="form-control" name="topic_id" id="exampleSelect1">
                                                @foreach ($topic as $topic)
                                                    <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Post Image Add</h4>
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
                                                    <input id="file-upload" name='image' type="file" accept="image/*"
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
            <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.ckeditor').ckeditor();
                    console.log(ckeditor)
                });
            </script>
            <script>
                const nameInput = document.getElementById('name');
                const slugInput = document.getElementById('slug');

                nameInput.addEventListener('input', generateSlug);
                slugInput.addEventListener('input', trimSlug)

                function generateSlug() {
                    const name = nameInput.value.trim().toLowerCase();
                    const slug = name.replace(/\s+/g, '-');

                    slugInput.value = slug;
                }

                function trimSlug() {
                    const name = slugInput.value.trim().toLowerCase();
                    const slug = name.replace(/\s+/g, '-');
                    slugInput.value = slug;


                }
            </script>
        @endsection
