@extends('layouts.adminlayout')
@section('content')
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end align-items-center mt-0">
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                Add <i class="fa-solid fa-plus"></i>
            </button>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item mx-2">
                <button class="collapsed btn btn-primary" id="filter-button" style="margin-top: 20px" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                    aria-controls="flush-collapseOne">
                    <i class="fa-solid fa-filter filter"></i>
                </button>
            </div>
        </div>
        <div class="basic-dropdown mx-1">
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    Export
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Excel</a>
                </div>
            </div>
        </div>
    </div>

    {{-- filter form --}}
    <form action="" id="filter-form">
        @csrf
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample"
            style="display: none;">
            <div class="accordion-body row d-flex justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="basic-form">
                        <div class="form-group mb-2">
                            <label>Job Category</label>
                            <select name="job_category" class="form-control default-select">
                                <option value="">Select Job Category</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Job Name</label>
                        <input type="text" name="job_name" class="form-control" placeholder="Enter Details"
                            value="">
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: flex-end; align-items: center;">
                <button type="button" class="btn btn-primary mb-2">Apply Filter</button>
            </div>
        </div>
    </form>
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
                        <form action="{{ admin_url('/admin/jobs/add/submit') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Blog image</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                              </div>
                              <div class="form-group">
                                <label for="blogtitle" class="form-label">Blog title</label>
                                <input type="text" class="form-control input-default " placeholder="Enter the blog title">
                            </div>
                            <div class="form-group">
                                <label for="blogtitle" class="form-label">Blog date</label>
                                <input type="date" name="datepicker" class="datepicker-default form-control" id="datepicker">
                            </div>
                            <div class="form-group">
                                <label for="blogdescription" class="form-label">blog description</label>
                                <textarea class="form-control" rows="8" id="comment"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="blogdescription" class="form-label">Job type</label>
                                <select class="form-control default-select">
                                    <option>Part time</option>
                                    <option>Full time</option>
                                    <option>Temporary</option>
                                </select>
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
                    <h4 class="card-title">Jobs Details</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="w-100">
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Job Category</th>
                                    <th>Job</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButton = document.getElementById('filter-button');
            const accordionBody = document.getElementById('flush-collapseOne');

            filterButton.addEventListener('click', function() {
                if (accordionBody.style.display === 'none' || accordionBody.style.display === '') {
                    accordionBody.style.display = 'block'; // Show the accordion body
                } else {
                    accordionBody.style.display = 'none'; // Hide the accordion body
                }
            });
        });
    </script>
@endsection
