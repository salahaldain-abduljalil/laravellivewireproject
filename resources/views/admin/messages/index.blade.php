@extends('admin.master')
@section('messages-active', 'active')

@section('title', 'messages')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="mb-2">
            <h4 class="fw-bold py-3 mb-4 d-inline">messages
            </h4>



              {{-- @livewire('admin.messages.create-messages') --}}




        </div>

        <div class="card mb-4">
            <div class="card-body">

           @livewire('admin.messages.messages-data')
           @livewire('admin.messages.message-show')
           @livewire('admin.messages.message-delete')


            </div>
        </div>



    </div>



@endsection
