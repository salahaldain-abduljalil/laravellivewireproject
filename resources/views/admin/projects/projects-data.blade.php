<div>
    <div class="mb-3">

        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
    </div>


    <div class="table-responsive text-nowrap">

        @if (count($data) > 0)
            <table class="table">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Category_id</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                    @foreach ($data as $record)
                        <tr>
                            <td>
                                <strong>{{ $record->name }}</strong>
                            </td>
                            <td>{{ $record->link }}</td>
                            <td>{{ $record->image }}</td>
                            <td>{{ $record->description }}</td>
                            <td>{{ $record->category->name }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                         wire:click.prevent="$dispatch('projectUpdate',{ id: {{ $record->id }} })"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>

                                    </div>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                         wire:click.prevent="$dispatch('delete',{ id: {{ $record->id }} })"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>

                                    </div>
                                </div>
                            </td>


                        </tr>
                    @endforeach

                </tbody>
            </table>

            {{ $data->links() }}
        @else
            <span class="text-danger">No Result Data</span>
        @endif


    </div>

</div>
