
<?php $__env->startSection('content'); ?>
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

    
    <form action="" id="filter-form">
        <?php echo csrf_field(); ?>
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
                        <form action="<?php echo e(admin_url('/admin/forms/add/submit')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-2">
                                <label>Job Category</label>
                                <select name="job_category" class="form-control default-select">
                                    <option value="" selected>Select Job Category</option>
                                    <?php $__currentLoopData = $job_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e(encryptId($jobcategory->id)); ?>"><?php echo e($jobcategory->job_category); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('job_category')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('job_category')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Form Name</label>
                                <input type="text" name="form_name" class="form-control" placeholder="Enter Form Name">
                                <?php if($errors->has('form_name')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('form_name')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!-- Your own DataTable initialization -->
    <script>
        $(document).ready(function() {
            $('#example3').DataTable({
                processing: true,
                serverSide: true,
                ajax: '<?php echo e(route('admin.forms')); ?>',
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    }
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
                    accordionBody.style.display = 'none'; // Hide the accordion body
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\E COM BUYER\OneDrive\Documents\GitHub\JobsHubV2\resources\views\Master\Forms\index.blade.php ENDPATH**/ ?>