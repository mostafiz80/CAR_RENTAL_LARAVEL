@extends('administrator.layouts.adminapp')
@section('title', 'Manages Rentals')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Rentals</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bookings List</li>
            </ol>
        </nav>
        <h2 class="h4">All booking</h2>
    </div>

</div>
<div class="card card-body border-0 shadow table-wrapper table-responsive">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif(session('cancel'))
<div class="alert alert-danger">
    {{ session('cancel') }}
</div>
@endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="border-gray-200">#</th>
                <th class="border-gray-200">Customer Name</th>
                <th class="border-gray-200">Car Details</th>
                <th class="border-gray-200">Status</th>
                <th class="border-gray-200">Dates</th>
                <th class="border-gray-200">Total Cost </th>
                <th class="border-gray-200">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Item -->
            @foreach($bookings as $booking) 
            <tr>
                <td>
                    <span class="fw-normal">{{ $booking->id }}</span>
                </td>
                <td><span class="fw-normal">{{ $booking->user->name }}</span></td>
                <td><small>{{ $booking->car->name }} <br/>{{ $booking->car->brand }}</small></td>
                <td><span class="fw-bold">{{ $booking->status }}</span><br />
                    @if ($booking->status == 'ongoing')
                    <form action="{{ route('rentals.status.complete', $booking->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-xs btn-success">
                            Complete
                        </button>
                    </form>
                    <form action="{{ route('rentals.status.cancel', $booking->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-xs btn-danger">
                            Cancel
                        </button>
                    </form>
                    @else
                    @endif
                    </td>
                <td><span class="fw-bold">{{ \Carbon\Carbon::parse($booking->start_date)->format('d-m-y') }} => {{ \Carbon\Carbon::parse($booking->end_date)->format('d-m-y') }}</span></td>
                <td><span class="fw-bold">${{ $booking->total_cost }}</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="{{ route('rentals.show', $booking->id) }}"><span
                                    class="fas fa-eye me-2"></span>View Details</a>
                            
                                    <form action="{{ route('rentals.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger rounded-bottom" onclick="return confirm('Are you sure you want to delete this car?');">
                                            <span class="fas fa-trash-alt me-2"></span>Remove
                                        </button>
                                    </form>
                        </div>
                    </div>
                </td>
            </tr>
            <!-- Item -->
            @endforeach
        </tbody>
    </table>
    <div
        class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
        {{$bookings->links()}}
    </div>
</div>
@endsection