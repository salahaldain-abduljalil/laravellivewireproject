@extends('admin.master')
@section('counters-active', 'active')

@section('title', 'Counters')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="mb-2">
            <h4 class="fw-bold py-3 mb-4 d-inline">Counters
            </h4>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm mb-2 mx-3" data-bs-toggle="modal" data-bs-target="#createModal">
                Add New
            </button>
              @livewire('admin.counters.create-counters')




        </div>

        <div class="card mb-4">
            <div class="card-body">

          @livewire('admin.counters.counters-data')
          @livewire('admin.counters.update-counters')
          @livewire('admin.counters.counters-delete')


            </div>
        </div>



    </div>



@endsection
