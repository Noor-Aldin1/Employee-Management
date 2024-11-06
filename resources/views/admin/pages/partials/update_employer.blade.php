<!-- Edit Employee Modal -->
<div id="edit_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editEmployeeForm" action="{{ route('employees.update', ':id') }}" method="POST"
                    class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Specify the method as PUT for updates -->

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Full Name <span class="text-danger">*</span></label>
                                <input id="editFullName" class="form-control @error('full_name') is-invalid @enderror"
                                    type="text" name="full_name" value="{{ old('full_name') }}" required>
                                @error('full_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                <input id="editEmail" class="form-control @error('email') is-invalid @enderror"
                                    type="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Phone Number <span class="text-danger">*</span></label>
                                <input id="editPhoneNumber"
                                    class="form-control @error('phone_number') is-invalid @enderror" type="text"
                                    name="phone_number" value="{{ old('phone_number') }}" required>
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Date of Employment <span
                                        class="text-danger">*</span></label>
                                <input id="editDateOfEmployment"
                                    class="form-control @error('date_of_employment') is-invalid @enderror"
                                    type="date" name="date_of_employment" value="{{ old('date_of_employment') }}"
                                    required>
                                @error('date_of_employment')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Department <span class="text-danger">*</span></label>
                                <select id="editDepartment"
                                    class="form-control @error('department_id') is-invalid @enderror"
                                    name="department_id" required>
                                    <option value="">Select Department</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}"
                                            {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                            {{ $department->department_name }}</option>
                                    @endforeach
                                </select>
                                @error('department_id')
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
<!-- /Edit Employee Modal -->

<!-- Link Trigger -->
<a style="display:none" class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"
    data-full-name="{{ $employee->full_name }}" data-email="{{ $employee->email }}"
    data-phone-number="{{ $employee->phone_number }}" data-date-of-employment="{{ $employee->date_of_employment }}"
    data-department-id="{{ $employee->department_id }}" data-id="{{ $employee->id }}">
    <i class="fa-solid fa-pencil m-r-5"></i> Edit
</a>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#edit_employee').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var modal = $(this);


            var formAction = $('#editEmployeeForm').attr('action').replace(':id', button.data('id'));
            $('#editEmployeeForm').attr('action', formAction);


            modal.find('#editFullName').val(button.data('full-name'));
            modal.find('#editEmail').val(button.data('email'));
            modal.find('#editPhoneNumber').val(button.data('phone'));
            modal.find('#editDateOfEmployment').val(button.data('date-of-employment'));
            modal.find('#editDepartment').val(button.data('department-id'));
        });
    });
</script>
