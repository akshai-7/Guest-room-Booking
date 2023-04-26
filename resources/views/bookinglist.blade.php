@extends('layouts.user')
@section('content')
    <div>
        <div style="display:flex">
            <h3 class="mt-4">House Booking Details</h3>
        </div>
        <table class="table table-bordered mt-3" style="border: 1px solid lightgrey;width:1300px;">
            <thead>
                <th style="text-align:center;">S.No</th>
                <th style="text-align:center;">Booking Id</th>
                <th style="text-align:center;">Customer Name</th>
                <th style="text-align:center;">Email</th>
                <th style="text-align:center;">Phone</th>
                <th style="text-align:center;">Adults</th>
                <th style="text-align:center;">Childrens</th>
                <th style="text-align:center;">Check In date</th>
                <th style="text-align:center;">Action</th>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="table_row">
                        <td style="text-align:center;" class="table_data">{{ $loop->iteration }}</td>
                        <td style="text-align:center;" class="table_data">{{ $book->booking_id }}
                        </td>
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
                        <td style="text-align:center;" class="table_data">
                            <a onclick="check({{ $book }})"><i class="fa-solid fa-edit btn btn-success"></i></a>
                            <a href="/delete/{{ $book->id }}" data-toggle="tooltip" data-placement="top"
                                title="Delete"><i class="fa-solid fa-trash btn btn-danger"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
