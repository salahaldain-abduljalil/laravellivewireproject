@extends('admin.master')
@section('subscribers-active', 'active')

@section('title', 'Subscribers')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="mb-2">
            <h4 class="fw-bold py-3 mb-4 d-inline">subscribers
            </h4>
            </button>



        </div>

        <div class="card mb-4">
            <div class="card-body">

        @livewire('admin.subscribers.subscriber-data')
        @livewire('admin.subscribers.subscribe-delete')

            </div>
        </div>

    </div>



@endsection
