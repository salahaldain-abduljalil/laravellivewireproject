@extends('admin.master')
@section('categories-active', 'active')

@section('title', 'categories')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="mb-2">
            <h4 class="fw-bold py-3 mb-4 d-inline">Categories
            </h4>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm mb-2 mx-3" data-bs-toggle="modal" data-bs-target="#createModal">
                Add New
            </button>
              @livewire('admin.categories.categories-create')




        </div>

        <div class="card mb-4">
            <div class="card-body">


           @livewire('admin.categories.categories-data')
          @livewire('admin.categories.categories-update')
          @livewire('admin.categories.categories-delete')


            </div>
        </div>



    </div>



@endsection
