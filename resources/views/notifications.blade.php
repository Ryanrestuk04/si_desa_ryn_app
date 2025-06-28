@extends('layouts.app')

@section('content')

<style>
    .notif-unread {
        background-color: rgba(115, 194, 251, 0.1);
    }

    .notif-read {
        background-color: rgba(115, 194, 251, 0.0);
    }
</style>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Semua Notifikasi</h1>
    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
    </a> --}}
</div>

<div class="row">
    @foreach (auth()->user()->notifications as $notification)
    @php
    $notifClass = is_null($notification->read_at) ? 'notif-unread' : 'notif-read';
    @endphp

    <div class="col-12 mb-1">
        <div class="card shadow">
            <div class="card-body {{ $notifClass }}">
                <div class="row">
                    <div class="col-1">{{ $loop->iteration }}</div>
                    <div class="col-9">{{ $notification->data['message'] }}</div>

                    @if (is_null($notification->read_at))
                    <div class="col-2">
                        <form action="/notification/{{ $notification->id }}/read" method="post">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-sm btn-primary">Mark as Read</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection