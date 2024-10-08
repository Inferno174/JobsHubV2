@extends('layouts.adminlayout')
@section('content')
<!-- Button trigger modal -->
<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">New Form <i class="fa-solid fa-plus"></i></button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create new form</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-form">
                    <form>
                        <div class="form-group mb-2">
                            <label>Select list (select one):</label>
                            <select class="form-control default-select">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select list (select one):</label>
                            <input type="text" class="form-control Enter Details" placeholder="Enter Details">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>

{{-- table --}}

<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Job Category Details</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="w-100">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Gender</th>
                                <th>Education</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Joining Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                <td>Tiger Nixon</td>
                                <td>Architect</td>
                                <td>Male</td>
                                <td>M.COM., P.H.D.</td>
                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2011/04/25</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Female</td>
                                <td>M.COM., P.H.D.</td>
                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2011/07/25</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                <td>Ashton Cox</td>
                                <td>Junior Technical</td>
                                <td>Male</td>
                                <td>B.COM., M.COM.</td>
                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2009/01/12</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                <td>Ashton Cox</td>
                                <td>Junior Technical</td>
                                <td>Male</td>
                                <td>B.COM., M.COM.</td>
                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2009/01/12</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                <td>Ashton Cox</td>
                                <td>Junior Technical</td>
                                <td>Male</td>
                                <td>B.COM., M.COM.</td>
                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2009/01/12</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                <td>Ashton Cox</td>
                                <td>Junior Technical</td>
                                <td>Male</td>
                                <td>B.COM., M.COM.</td>
                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2009/01/12</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
