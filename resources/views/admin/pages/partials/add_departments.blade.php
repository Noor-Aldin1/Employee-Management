@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Add Department Modal -->
<div id="add_department" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('departments.store') }}" method="POST" class="needs-validation"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Department Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="department_name" required>
                                <div class="invalid-feedback">
                                    Please provide a department name.
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Department Description</label>
                                <textarea class="form-control" name="department_description" rows="3"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<!-- /Add Department Modal -->
