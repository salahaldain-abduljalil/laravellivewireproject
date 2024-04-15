@extends('admin.master')
@section('skills-active', 'active')

@section('title', 'Skills')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="mb-2">
            <h4 class="fw-bold py-3 mb-4 d-inline">Skills</h4>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm mb-2 mx-3" data-bs-toggle="modal" data-bs-target="#createModal">
                Add New
            </button>
              @livewire('admin.skills.create-skills')



        </div>

        <div class="card mb-4">
            <div class="card-body">

                @livewire('admin.skills.skill-data')


            </div>
        </div>

        @livewire('admin.skills.skills-update')
        @livewire('admin.skills.skill-delete')
        @livewire('admin.skills.skill-show')

    </div>

@endsection
