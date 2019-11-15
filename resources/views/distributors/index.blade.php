@extends('layouts.app')

@section('content')

    @if(Session::has('result'))
        <div class="alert alert-success">
            {{Session::pull('result')}}
        </div>
    @endif

    @if(Session::has('result_bad'))
        <div class="alert alert-warning">
            {{Session::pull('result_bad')}}
        </div>
    @endif

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Site</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($distributors as $distributor)

                <tr class="container">
                    <td> {{ $i++ }} </td>

                    <td>
                        <span class="col-md">{{ $distributor['name'] }}</span>
                        <a href="distributors/distributor/{{ $distributor['id'] }}/edit">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                        <a href="{{ route('distributors::distributor::delete', $distributor['id'])}}">
                            <button type="submit"  class="btn btn-warning">
                                Delete
                            </button>
                        </a>
                    </td>
                    <td>{{ $distributor['phone'] }}</td>
                    <td>{{ $distributor['site'] }}</td>
                </tr>
                    @endforeach
            </tbody>
        </table>

    </div>
@endsection
