<!-- Edit Department Modal -->
<div id="edit_department" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editDepartmentForm" action="{{ route('departments.update', ':id') }}" method="POST"
                    class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Specify the method as PUT for updates -->

                    <div class="row">
                        <!-- Department Name -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Department Name <span class="text-danger">*</span></label>
                                <input id="editDepartmentName"
                                    class="form-control @error('department_name') is-invalid @enderror" type="text"
                                    name="department_name" value="{{ old('department_name') }}" required>
                                @error('department_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Department Description -->
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Department Description <span
                                        class="text-danger">*</span></label>
                                <input id="editDepartmentDescription"
                                    class="form-control @error('department_description') is-invalid @enderror"
                                    type="text" name="department_description"
                                    value="{{ old('department_description') }}" required>
                                @error('department_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Department Modal -->

<!-- Link Trigger -->
<a style="display:none" class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_department"
    data-department-name="{{ $department->department_name }}"
    data-department-description="{{ $department->department_description }}" data-id="{{ $department->id }}">
    <i class="fa-solid fa-pencil m-r-5"></i> Edit Department
</a>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#edit_department').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var modal = $(this);

            var formAction = $('#editDepartmentForm').attr('action').replace(':id', button.data('id'));
            $('#editDepartmentForm').attr('action', formAction);

            // Populate department fields
            modal.find('#editDepartmentName').val(button.data('department-name'));
            modal.find('#editDepartmentDescription').val(button.data('department-description'));
        });
    });
</script>
