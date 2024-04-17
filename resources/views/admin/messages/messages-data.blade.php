<div>
    <div class="mb-3">

        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
    </div>


    <div class="table-responsive text-nowrap">

        @if (count($data) > 0)
            <table class="table">

                <thead>
                    <tr>
                        <th width="20%">Name</th>
                        <th width="10%">Email</th>
                        <th width="15%">Subject</th>
                        <th width="30%">Messages</th>
                        <th width="10%">Status</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                    @foreach ($data as $record)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $record->name }}</strong>
                            </td>
                            <td>{{ $record->email }}</td>
                            <td>{{ $record->subject }}</td>
                            <td>
                                {{ $record->message }}

                            </td>
                            <td>
                                <span class="{{$record->status == '0' ? 'text-danger' : 'text-primary'  }}">
                                    {{ $record->status == '0' ? 'Non Active' : 'Active'}}

                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                         wire:click.prevent="$dispatch('messageShow',{ id: {{ $record->id }} })"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Show</a>
                                        <a class="dropdown-item" href="#"
                                         wire:click.prevent="$dispatch('messagedelete',{ id: {{ $record->id }} })"><i
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
