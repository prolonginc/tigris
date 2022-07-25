@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"> USERS</h1>
            </div>
            <!-- End Col -->


            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->

    
        
        <div class="row justify-content-lg-center">
            <div class="card mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header">
                    <div class="row justify-content-between align-items-center flex-grow-1">
                        <div class="col-md">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-header-title">Users</h4>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-info" href="{{route('users.create')}}">
                                <i class="bi-person-plus-fill me-1"></i> ADD USERS
                            </a>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Header -->
        
                <!-- Table -->
                <div class="table-responsive">
                    <div id="datatable_wrapper" class="">
                        <table id="datatable"
                            class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table dataTable no-footer"
                            role="grid" aria-describedby="datatable_info">
                            <thead class="thead-light">
                                <tr role="row">
                                    <th scope="col" class="table-column-pe-0 sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="" style="width: 75.4312px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                                            <label class="form-check-label" for="datatableCheckAll"></label>
                                        </div>
                                    </th>
                                    <th class="table-column-ps-0 sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Full name" style="width: 406.219px;">Full name</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                        aria-label="Type: activate to sort column ascending" style="width: 273px;">Email</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Email"
                                        style="width: 298.444px;">created_at</th>
                                </tr>
                            </thead>
        
                            <tbody>
                                @foreach ($users as $user)
                                <tr role="row" class="odd">
                                    <td class="table-column-pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="usersDataCheck2">
                                            <label class="form-check-label" for="usersDataCheck2"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-ps-0">
                                        <a class="d-flex align-items-center" href="./user-profile.html">
                                            <div class="flex-shrink-0">
                                                <div class="avatar avatar-sm avatar-circle">
                                                    <img class="avatar-img" src="{{asset('/assets/img/160x160/img10.jpg')}}"
                                                        alt="Image Description">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="text-inherit mb-0">{{$user->name}} <i
                                                        class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="" data-bs-original-title="Top endorsed"
                                                        aria-label="Top endorsed"></i></h5>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Table -->
        
                <!-- Footer -->
                <div class="card-footer">
                    <!-- Pagination -->
                    {{-- {{-- <div class="row justify-content-center justify-content-sm-between align-items-sm-center"> --}}
                        <div class="col-sm mb-2 mb-sm-0">
                            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                            </div>
                        </div>
                        <!-- End Col -->
        
                        <div class="col-sm-auto">
                            <div class="d-flex justify-content-center justify-content-sm-end">
                                <div class="pagination">
                                    {{$users->links("pagination::bootstrap-4")}}
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->
                    </div> 
                    <!-- End Pagination -->
                </div>
                <!-- End Footer -->
            </div>
        </div>
        <!-- End Row -->

</div>
@endsection