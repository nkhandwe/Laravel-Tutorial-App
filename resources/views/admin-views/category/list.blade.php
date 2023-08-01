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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Category List</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>Category List</span></li>
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


        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Category List</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th>
                                        <div class="th-content">SL</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Image</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Name</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Slug</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Date Added</div>
                                    </th>
                                    <th>
                                        <div class="th-content">Status</div>
                                    </th>

                                    <th>
                                        <div class="th-content">Action</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    @foreach ($category as $index => $category)
                                        <td>
                                            {{ $index + 1 }}
                                        </td>
                                        <td><img src="{{ URL::to('/category/', $category->image) }}" width="200"
                                                height="100"></td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->created_at }}</td>


                                        <td><span class="badge badge-success"> Active </span></td>

                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary"
                                                    title="" data-original-title="Edit"><i class="las la-pen"></i></a>
                                                <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger"
                                                    title="" data-original-title="Delete"><i
                                                        class="las la-trash"></i></a>
                                            </div>
                                        </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

       
@endsection
