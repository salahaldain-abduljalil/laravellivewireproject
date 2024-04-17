<x-create-component title="Add New Counter">
    <div class="col-md-4 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        @include('admin.error',['property'=>'name'])

    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">count</label>
        <input type="number" class="form-control" placeholder="count" min="1"
            max="100" wire:model='count' />
            @include('admin.error',['property'=>'count'])


    </div>

    <div class="col-md-4 mb-0">
        <label class="form-label">icon</label>
        <input type="text" class="form-control" placeholder="number" min="1"
            max="100" wire:model='icon' />
            @include('admin.error',['property'=>'icon'])


    </div>

</x-create-component>
