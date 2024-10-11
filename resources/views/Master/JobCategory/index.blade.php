@extends('layouts.adminlayout')
@section('content')
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Add
            <i class="fa-solid fa-plus"></i></button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Job Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="basic-form">
                        <form action="{{ env('APP_URL') }}/add/job_category/submit" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Job Category</label>
                                <input type="text" name="job_category" class="form-control Enter Details"
                                    placeholder="Enter Details" value="{{ old('job_category') }}">

                                @if ($errors->has('job_category'))
                                    <span class="text-danger">{{ $errors->first('job_category') }}</span>
                                @endif
                            </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
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
                                    <th>Sno</th>
                                    <th>Category Name</th>
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($job_category as $index => $jc)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $jc->job_category }}</td>
                                        <td>{{ getUserName($jc->created_by) }}</td>
                                        <td>{{ getStatus($jc->status) }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
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
    </div>
@endsection
