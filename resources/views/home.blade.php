@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title">Dashboard</h1>
            </div>
            <!-- End Col -->


            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->

    <div class="row">
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle">Total Users</h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit">72,540</h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="js-chart chartjs-render-monitor" data-hs-chartjs-options="{
                              &quot;type&quot;: &quot;line&quot;,
                              &quot;data&quot;: {
                                 &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                 &quot;datasets&quot;: [{
                                  &quot;data&quot;: [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                  &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                  &quot;borderColor&quot;: &quot;#377dff&quot;,
                                  &quot;borderWidth&quot;: 2,
                                  &quot;pointRadius&quot;: 0,
                                  &quot;pointHoverRadius&quot;: 0
                                }]
                              },
                              &quot;options&quot;: {
                                 &quot;scales&quot;: {
                                   &quot;yAxes&quot;: [{
                                     &quot;display&quot;: false
                                   }],
                                   &quot;xAxes&quot;: [{
                                     &quot;display&quot;: false
                                   }]
                                 },
                                &quot;hover&quot;: {
                                  &quot;mode&quot;: &quot;nearest&quot;,
                                  &quot;intersect&quot;: false
                                },
                                &quot;tooltips&quot;: {
                                  &quot;postfix&quot;: &quot;k&quot;,
                                  &quot;hasIndicator&quot;: true,
                                  &quot;intersect&quot;: false
                                }
                              }
                            }" style="display: block; height: 48px; width: 101px;" width="84" height="40">
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-success text-success">
                <i class="bi-graph-up"></i> 12.5%
              </span>
              <span class="text-body fs-6 ms-1">from 70,104</span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle">Sessions</h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit">29.4%</h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="js-chart chartjs-render-monitor" data-hs-chartjs-options="{
                              &quot;type&quot;: &quot;line&quot;,
                              &quot;data&quot;: {
                                 &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                 &quot;datasets&quot;: [{
                                  &quot;data&quot;: [21,20,24,20,18,17,15,17,30,30,35,25,18,30,31,35,35,90,90,90,85,100,120,120,120,100,90,75,75,75,90],
                                  &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                  &quot;borderColor&quot;: &quot;#377dff&quot;,
                                  &quot;borderWidth&quot;: 2,
                                  &quot;pointRadius&quot;: 0,
                                  &quot;pointHoverRadius&quot;: 0
                                }]
                              },
                              &quot;options&quot;: {
                                 &quot;scales&quot;: {
                                   &quot;yAxes&quot;: [{
                                     &quot;display&quot;: false
                                   }],
                                   &quot;xAxes&quot;: [{
                                     &quot;display&quot;: false
                                   }]
                                 },
                                &quot;hover&quot;: {
                                  &quot;mode&quot;: &quot;nearest&quot;,
                                  &quot;intersect&quot;: false
                                },
                                &quot;tooltips&quot;: {
                                  &quot;postfix&quot;: &quot;%&quot;,
                                  &quot;hasIndicator&quot;: true,
                                  &quot;intersect&quot;: false
                                }
                              }
                            }" width="84" height="40" style="display: block; height: 48px; width: 101px;">
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-success text-success">
                <i class="bi-graph-up"></i> 1.7%
              </span>
              <span class="text-body fs-6 ms-1">from 29.1%</span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle">Avg. Click Rate</h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit">56.8%</h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="js-chart chartjs-render-monitor" data-hs-chartjs-options="{
                              &quot;type&quot;: &quot;line&quot;,
                              &quot;data&quot;: {
                                 &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                 &quot;datasets&quot;: [{
                                  &quot;data&quot;: [25,18,30,31,35,35,60,60,60,75,21,20,24,20,18,17,15,17,30,120,120,120,100,90,75,90,90,90,75,70,60],
                                  &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                  &quot;borderColor&quot;: &quot;#377dff&quot;,
                                  &quot;borderWidth&quot;: 2,
                                  &quot;pointRadius&quot;: 0,
                                  &quot;pointHoverRadius&quot;: 0
                                }]
                              },
                              &quot;options&quot;: {
                                 &quot;scales&quot;: {
                                   &quot;yAxes&quot;: [{
                                     &quot;display&quot;: false
                                   }],
                                   &quot;xAxes&quot;: [{
                                     &quot;display&quot;: false
                                   }]
                                 },
                                &quot;hover&quot;: {
                                  &quot;mode&quot;: &quot;nearest&quot;,
                                  &quot;intersect&quot;: false
                                },
                                &quot;tooltips&quot;: {
                                  &quot;postfix&quot;: &quot;%&quot;,
                                  &quot;hasIndicator&quot;: true,
                                  &quot;intersect&quot;: false
                                }
                              }
                            }" width="84" height="40" style="display: block; height: 48px; width: 101px;">
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-danger text-danger">
                <i class="bi-graph-down"></i> 4.4%
              </span>
              <span class="text-body fs-6 ms-1">from 61.2%</span>
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="#">
            <div class="card-body">
              <h6 class="card-subtitle">Pageviews</h6>

              <div class="row align-items-center gx-2 mb-1">
                <div class="col-6">
                  <h2 class="card-title text-inherit">92,913</h2>
                </div>
                <!-- End Col -->

                <div class="col-6">
                  <!-- Chart -->
                  <div class="chartjs-custom" style="height: 3rem;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="js-chart chartjs-render-monitor" data-hs-chartjs-options="{
                              &quot;type&quot;: &quot;line&quot;,
                              &quot;data&quot;: {
                                 &quot;labels&quot;: [&quot;1 May&quot;,&quot;2 May&quot;,&quot;3 May&quot;,&quot;4 May&quot;,&quot;5 May&quot;,&quot;6 May&quot;,&quot;7 May&quot;,&quot;8 May&quot;,&quot;9 May&quot;,&quot;10 May&quot;,&quot;11 May&quot;,&quot;12 May&quot;,&quot;13 May&quot;,&quot;14 May&quot;,&quot;15 May&quot;,&quot;16 May&quot;,&quot;17 May&quot;,&quot;18 May&quot;,&quot;19 May&quot;,&quot;20 May&quot;,&quot;21 May&quot;,&quot;22 May&quot;,&quot;23 May&quot;,&quot;24 May&quot;,&quot;25 May&quot;,&quot;26 May&quot;,&quot;27 May&quot;,&quot;28 May&quot;,&quot;29 May&quot;,&quot;30 May&quot;,&quot;31 May&quot;],
                                 &quot;datasets&quot;: [{
                                  &quot;data&quot;: [21,20,24,15,17,30,30,35,35,35,40,60,12,90,90,85,70,75,43,75,90,22,120,120,90,85,100,92,92,92,92],
                                  &quot;backgroundColor&quot;: [&quot;rgba(55, 125, 255, 0)&quot;, &quot;rgba(255, 255, 255, 0)&quot;],
                                  &quot;borderColor&quot;: &quot;#377dff&quot;,
                                  &quot;borderWidth&quot;: 2,
                                  &quot;pointRadius&quot;: 0,
                                  &quot;pointHoverRadius&quot;: 0
                                }]
                              },
                              &quot;options&quot;: {
                                 &quot;scales&quot;: {
                                   &quot;yAxes&quot;: [{
                                     &quot;display&quot;: false
                                   }],
                                   &quot;xAxes&quot;: [{
                                     &quot;display&quot;: false
                                   }]
                                 },
                                &quot;hover&quot;: {
                                  &quot;mode&quot;: &quot;nearest&quot;,
                                  &quot;intersect&quot;: false
                                },
                                &quot;tooltips&quot;: {
                                  &quot;postfix&quot;: &quot;k&quot;,
                                  &quot;hasIndicator&quot;: true,
                                  &quot;intersect&quot;: false
                                }
                              }
                            }" width="84" height="40" style="display: block; height: 48px; width: 101px;">
                    </canvas>
                  </div>
                  <!-- End Chart -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <span class="badge bg-soft-secondary text-body">0.0%</span>
              <span class="text-body fs-6 ms-1">from 2,913</span>
            </div>
          </a>
          <!-- End Card -->
        </div>
      </div>




    <!-- Card -->
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
                                            <img class="avatar-img" src="./assets/img/160x160/img10.jpg"
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
    <!-- End Card -->

</div>
@endsection