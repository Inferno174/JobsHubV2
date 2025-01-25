<?php $__env->startSection('content'); ?>
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
 <form action="" id="filter-form">
    <?php echo csrf_field(); ?>
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
                    <h5 class="modal-title">Add Job Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="basic-form">
                        <form action="<?php echo e(admin_url('/admin/add/jobcategory/submit')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>Job Category</label>
                                <input type="text" name="job_category" class="form-control Enter Details"
                                    placeholder="Enter Details" value="<?php echo e(old('job_category')); ?>">

                                <?php if($errors->has('job_category')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('job_category')); ?></span>
                                <?php endif; ?>
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
                                <?php $__currentLoopData = $job_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $jc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($index + 1); ?></td>
                                    <td><?php echo e($jc->job_category); ?></td>
                                    <td><?php echo e(getUserName($jc->created_by)); ?></td>
                                    <td><?php echo e(getStatus($jc->status)); ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" id="editmodal"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!--Edit Modal -->
 <div class="modal fade" id="editmodal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Job Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-form">
                    <form action="" method=""
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="job_category" class="form-control Enter Details"
                                placeholder="Enter Details" value="">
                        </div>
                        <div class="form-group">
                            <label>Category Status</label>
                            <input type="text" name="job_category" class="form-control Enter Details"
                                placeholder="Enter Details" value="">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\E COM BUYER\OneDrive\Documents\GitHub\JobsHubV2\resources\views/Master/JobCategory/index.blade.php ENDPATH**/ ?>