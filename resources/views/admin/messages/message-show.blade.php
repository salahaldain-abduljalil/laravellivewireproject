
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
                            <div class="col-md-6 mb-0">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control"  wire:model='name' />
                            </div>
                            <div class="col-md-6 mb-0">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control"
                                    max="100" wire:model='email' />
                            </div>
                            <div class="col-md-12 mb-0">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control"
                                    max="100" wire:model='subject' />
                            </div>
                            <div class="col-md-12 mb-0">
                                <label class="form-label">The Message</label>
                                <input type="text" class="form-control"
                                    max="100" wire:model='message' />
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


