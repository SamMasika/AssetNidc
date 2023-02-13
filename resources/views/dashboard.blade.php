@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <a href="{{url('asset-list')}}">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Assets</p>
                                <h4 class="mb-0">{{$assets->count()}}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-store font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <a href="{{url('asset-list')}}">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Assigned Assets</p>
                                <h4 class="mb-0">{{$assigned_asset->count()}}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            @can('viewdisposal-side')
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <a href="{{url('disposal')}}">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Disposed</p>
                                <h4 class="mb-0">{{$disposal->count()}}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-trash-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            @endcan
            @can('viewworkshop-side')
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <a href="{{url('workshop')}}">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Faults</p>
                                <h4 class="mb-0">{{$maintains->count()}}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-x font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            @endcan
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <a href="{{url('order-list')}}">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Requests</p>
                                <h4 class="mb-0">{{$orders->count()}}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-basket font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            @can('viewuser-side') 
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <a href="{{url('user-list')}}">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Users</p>
                                <h4 class="mb-0">{{$users->count()}}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-user font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            @endcan
        </div>
        <!-- end row -->  
    </div>
</div>



@endsection
