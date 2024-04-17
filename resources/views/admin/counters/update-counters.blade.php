
<x-edit-counters title="Edit The Counter">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-4 mb-0">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Name" wire:model='name' />
                @include('livewire.admin.loading',['buttonName'=>'name'])

            </div>
            <div class="col-md-4 mb-0">
                <label class="form-label">count</label>
                <input type="number" class="form-control" placeholder="10"
                     wire:model='count' />
                    @include('livewire.admin.loading',['buttonName'=>'count'])

            </div>
            <div class="col-md-4 mb-0">
                <label class="form-label">icon</label>
                <input type="number" class="form-control" placeholder="icon"
                     wire:model='icon' />
                    @include('livewire.admin.loading',['buttonName'=>'icon'])

            </div>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
        </button>
        <button type="submit" class="btn btn-primary">

            @include('livewire.admin.loading',['buttonName'=>'Update'])

        </button>
    </div>

</x-edit-counters>
