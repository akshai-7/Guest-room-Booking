@extends('layouts.user')
@section('content')
    <div>
        <div class="list-container1">
            <div style="display:flex">
                <h3 class="mt-4">House Details</h3>
                <a style="margin-left:700px;" href="/house"><input type="submit" value="Add-House"
                        class="btn btn-secondary btn-sm mt-4"></a>
            </div>
            @foreach ($lists as $lists)
                <div class="house">
                    <div class="house-img">
                        @if ($lists->image != null)
                            <a>
                                <img src="{{ url('images/' . explode(',', $lists->image)[0]) }}">
                            </a>
                        @endif
                    </div>
                    <div class="house-info mt-5">
                        <h4>{{ $lists->housename }},{{ $lists->address }}-{{ $lists->city }}</h4>
                        <p>House Type-{{ $lists->housetype }} </p>
                        <p>{{ $lists->facilities }}</p>
                        <p>Contact.no - {{ $lists->mobile }}</p>
                        <a onclick="check({{ $lists }})"><i class="fa-solid fa-edit btn btn-success btn-sm"></i></a>
                        <a href="/delete/{{ $lists->id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                class="bi bi-trash-fill btn btn-danger btn-sm"></i></a>
                        <a>
                            @if ($lists->status == 'Booked')
                                <button type="button" class="btn btn-success btn-sm">Booked</button>
                            @else
                                <button type="button" class="btn btn-primary btn-sm">Available
                                </button>
                            @endif
                        </a>
                        <div class="house-price">
                            <h5>{{ $lists->guest }} Guest</h5>
                            <h4 style="color:#ff5361"><i class="fa-solid fa-indian-rupee-sign"> {{ $lists->price }}</i>
                                <span>/ day</span>
                            </h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
