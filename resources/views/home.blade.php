@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }} <a href="{{ route('profile.edit') }}"
                            class="btn btn-link">{{ __('Edit Profile') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered mb-0 rounded yajra-datatable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Genre</th>
                                    <th>Time</th>
                                    <th>Cinema</th>
                                    <th>Date</th>

                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
