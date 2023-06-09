@extends('layouts.user')
@section('content')
    <div>
        <div style="display:flex">
            <h3 class="mt-4" id="heading">House Booking Details</h3>
        </div>
        <table class="table table-bordered mt-3" id="table">
            <thead>
                <th style="text-align:center;">S.No</th>
                <th style="text-align:center;">Customer Name</th>
                <th style="text-align:center;">Email</th>
                <th style="text-align:center;">Phone</th>
                <th style="text-align:center;">Adults</th>
                <th style="text-align:center;">Childrens</th>
                <th style="text-align:center;">Check In date</th>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="table_row">
                        <td style="text-align:center;" class="table_data">{{ $loop->iteration }}</td>
                        <td style="text-align:center;" class="table_data col-md-2">{{ $book->name }}
                        </td>
                        <td style="text-align:center;" class="table_data">{{ $book->email }}</td>
                        <td style="text-align:center;" class="table_data">{{ $book->phone }}</td>
                        <td style="text-align:center;" class="table_data">
                            {{ $book->adult }}</td>
                        <td style="text-align:center;" class="table_data">
                            {{ $book->child }}</td>
                        <td style="text-align:center;" class="table_data">
                            {{ $book->check_in }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (count($books) < 1)
            <div id="dataNotFound">
                <p>Data not found</p>
            </div>
        @endif
    </div>
@endsection
