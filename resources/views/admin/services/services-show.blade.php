
 <!-- Modal -->
    <div class="modal fade " id="showModal" tabindex="-1" aria-hidden="true"  wire:ignore.self>
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Edit Skill</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>



                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-12 mb-0">
                                <label class="form-label">Name</label>
                                <div class="form-control">{{ $name }}</div>
                            </div>
                            <div class="col-md-12 mb-0 mt-2">
                                <label class="form-label">Description</label>
                                <div class="form-control">{{ $description }}</div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>

            </div>
        </div>
    </div>



