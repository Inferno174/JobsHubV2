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
          <button class="collapsed btn btn-primary" id="filter-button" style="margin-top: 20px" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false"
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
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="display: none;">
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
                    <input type="text" name="job_name" class="form-control" placeholder="Enter Details" value="">
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
                <h4 class="card-title">Froms Details</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-striped table-bordered data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be loaded dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery should be loaded first -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>

<!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<!-- Your own DataTable initialization -->
<script>
    $(document).ready(function(){
        $('#example3').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.forms') }}',
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'}
            ]
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const filterButton = document.getElementById('filter-button');
    const accordionBody = document.getElementById('flush-collapseOne');

    filterButton.addEventListener('click', function() {
        if (accordionBody.style.display === 'none' || accordionBody.style.display === '') {
            accordionBody.style.display = 'block'; // Show the accordion body
        } else {
            accordionBody.style.display = 'none';  // Hide the accordion body
        }
    });
});
    </script>
@endsection
