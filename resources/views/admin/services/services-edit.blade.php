

    <!-- Modal -->
    <div class="modal fade " id="editModal" tabindex="-1" aria-hidden="true"  wire:ignore.self>
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Edit The Services</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form wire:submit.prevent='submit'>
                    <div class="col-md-6 mb-0">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
                        @include('admin.error', ['property' => 'name'])
                    </div>
                    <div class="col-md-6 mb-0">
                        <label class="form-label">Icon</label>
                        <input type="text" class="form-control" placeholder="icon" wire:model='icon' />
                        @include('admin.error', ['property' => 'icon'])
                    </div>
                    <div class="col-md-12 mb-0 mt-2">
                        <label class="form-label">Description</label>
                        <textarea type="number" class="form-control" placeholder="Description" wire:model='description'></textarea>
                        @include('admin.error', ['property' => 'description'])
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">

                            @include('livewire.admin.loading',['buttonName'=>'Update'])

                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>









