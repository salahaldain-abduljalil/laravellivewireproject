@extends('admin.master')
@section('projects-active', 'active')

@section('title', 'Projects')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="mb-2">
            <h4 class="fw-bold py-3 mb-4 d-inline">Projects
            </h4>
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary btn-sm mb-2 mx-3" data-bs-toggle="modal" data-bs-target="#createModal">
    Add New
</button>

@livewire('admin.projects.projects-create')



        </div>

        <div class="card mb-4">
            <div class="card-body">

        @livewire('admin.projects.projects-data')
        @livewire('admin.projects.projects-update')


            </div>
        </div>



    </div>



@endsection
