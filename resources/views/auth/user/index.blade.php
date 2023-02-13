@extends('layouts.master')

@section('content')
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title ">Users
                                    <a href="" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal" ><i class="fas fa-plus"></i> Add User</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Section</th>
                                    <th>Status</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                    
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->username}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>
                                            @foreach($item->roles as $role)
                                            <span class="badge rounded-pill badge-soft-primary font-size-12 fw-medium">{{ $role->name }}</span>
                                        @endforeach
                                        </td>
                                        @if ($item->depart_id==NULL)
                                            <td>--</td>
                                            @else
                                            
                                            <td>{{$item->department->name}}</td>
                                            @endif
                                            @if ($item['status'] ==0)
                                            <td><span class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">Inactive</span></td>
                                            @else
                                            <td ><span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">Active</span></td>
                                            @endif
                                            @include('auth.user.activate')
                                        <td>
                                            {{-- <a class="btn btn-outline-info btn-sm edit" title="View"  data-bs-toggle="modal" id="create-btn" 
                                            data-bs-target="#repairModal{{$item['id']}}">
                                            <i class="fas fa-eye"></i>
                                        </a> --}}
                                        {{-- <a class="btn btn-outline-warning btn-sm edit" title="Edit"  data-bs-toggle="modal" id="create-btn" 
                                        data-bs-target="#EditModal{{$item['id']}}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a> --}}
                                    <a  href="{{url('user-assignView/'.$item->id)}}" class="btn btn-outline-primary btn-sm edit" title="Assign"   
                                  >
                                    <i class="fas fa-edit"></i>
                                </a>
                                @can('enable-user') 
                                @if($item->status==0)
                               
                            <a class="btn btn-outline-warning btn-sm edit" title="Activate"  data-bs-toggle="modal" id="create-btn" 
                                        data-bs-target="#ActivateModal{{$item['id']}}">
                                        <i class="fas fa-toggle-off"></i>
                                    </a>
                            @else
                           
                        <a class="btn btn-outline-warning btn-sm edit" title="Deactivate"  data-bs-toggle="modal" id="create-btn" 
                                        data-bs-target="#ActivateModal{{$item['id']}}">
                                        <i class="fas fa-toggle-on"></i>
                                    </a>
                        @endif
                                @endcan
                                    <a class="btn btn-outline-danger btn-sm edit" title="Delete"  data-bs-toggle="modal" id="create-btn" 
                                    data-bs-target="#ModalDelete{{$item['id']}}">
                                    <i class="fas fa-trash"></i>
                                </a>

                                @include('asset.section.edit')
                            </td>   
                            @include('auth.user.delete')
                        </tr>                   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
            </div> 


            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" >Add User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                        </div>
                        <form action="{{url('user-store')}}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="itemName-field" class="form-label">FullName</label>
                                    <input type="text" name="name" id="itemname-field" class="form-control" placeholder="Enter Name" required />
                                </div>
                                <div class="mb-3">
                                    <label for="itemName-field" class="form-label">Username</label>
                                    <input type="text" name="username" id="itemname-field" class="form-control" placeholder="Enter Username" required />
                                </div>
                                <div class="mb-3">
                                    <label for="itemName-field" class="form-label">Email</label>
                                    <input type="email" name="email" id="itemname-field" class="form-control" placeholder="Enter Email" required />
                                </div>
                                <div class="mb-3">
                                    <label for="itemName-field" class="form-label">Phone</label>
                                    <input type="text" name="phone" id="itemname-field" class="form-control" placeholder="Enter Phone" required />
                                </div>
                                <div class="mb-3">
                                    <label for="itemName-field" class="form-label">Password</label>
                                    <input type="password" name="password" id="itemname-field" class="form-control" placeholder="Enter password" required />
                                </div>
                              
                                    <div class="mb-3">
                                        <label for="basicpill-address-input" class="form-label">Department</label>
                                        <select name="depart_id" id="SelectLm" class="form-control">
                                            <option value="0">--Department--</option>
                                            @foreach ($departments as $item)  
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                   
                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="add-btn">Add User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection