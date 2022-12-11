@extends('layouts.dashboard')

@section('content')
    <div class="db-cent-2">
        <div class="db-2-main-1">
            <div class="db-2-main-2"> <img src="{{ asset("front/images/icon/dbc6.png") }}" alt=""> <span> Cafe Bookings</span>
                <p></p>
                <h2>{{ $total_room_bookings }}</h2> </div>
        </div>
        <div class="db-2-main-1">
            <div class="db-2-main-2"> <img src="{{ asset("front/images/icon/dbc5.png") }}" alt=""> <span> Promo</span>
                <p></p>
                <h2>{{ $total_event_bookings }}</h2> </div>
        </div>
        <div class="db-2-main-1">
            <div class="db-2-main-2"> <img src="{{ asset("front/images/icon/dbc3.png") }}" alt=""> <span> Pembayaran jatuh tempo</span>
                <p></p>
                <h2>{{ $total_pending_payments }}</h2> </div>
        </div>
    </div>
    <div class="db-cent-3">
        <div class="db-cent-table db-com-table">
            <div class="db-title">
                <h3><img src="{{ asset("front/images/icon/dbc5.png") }}" alt=""/> Room Bookings</h3>
                <p>Lihat pemesanan  Anda yang akan datang di sini</p>
            </div>
            <table class="bordered responsive-table">
                <thead>
                <tr>
                    <th>Cafe</th>
                    <th>Type</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Total Biaya</th>
                    <th>Status</th>
                    <th>Pembayaran</th>
                </tr>
                </thead>
                <tbody>
                @forelse($room_bookings as $index => $room_booking)
                    <tr>
                        <td>{{ $room_booking->room->room_number}}</td>
                        <td>{{ $room_booking->room->room_type->name}}</td>
                        <td>{{ $room_booking->arrival_date }}</td>
                        <td>{{ $room_booking->departure_date }}</td>
                        <td>Rs. {{ $room_booking->room_cost }}</td>
                        <td>
                            @if($room_booking->status == "pending")
                                <span class="label label-default">Pending</span>
                            @elseif($room_booking->status == "checked_in")
                                <span class="label label-primary">Checked In</span>
                            @elseif($room_booking->status == "checked_out")
                                <span class="label label-success">Checked Out</span>
                            @else
                                <span class="label label-danger">Cancelled</span>
                            @endif
                        </td>
                        <td>
                            @if($room_booking->payment == true)
                                <span class="db-success">Di Bayar</span>
                            @else
                                <span class="db-not-success">Tidak Di Bayarkan</span>
                            @endif
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td>Maaf, pemesanan tidak ditemukan.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="db-cent-3">
        <div class="db-cent-table db-com-table">
            <div class="db-title">
                <h3><img src="{{ asset("front/images/icon/dbc6.png") }}" alt=""/> My Promo</h3>
                <p>View all Promo here.</p>
            </div>
            <table class="bordered responsive-table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Promo</th>
                    <th>Venue</th>
                    <th>Date</th>
                    <th>No of Tickets</th>
                    <th>Total Biaya</th>
                    <th>Status</th>
                    <th>Pembayaran</th>
                </tr>
                </thead>
                <tbody>
                @forelse($event_bookings as $index => $event_booking)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $event_booking->event->name}}</td>
                        <td>{{ $event_booking->event->venue}}</td>
                        <td>{{ $event_booking->event->date}}</td>
                        <td>{{ $event_booking->number_of_tickets }}</td>
                        <td>Rs. {{ $event_booking->total_cost }}</td>
                        <td>
                            @if($event_booking->status == true)
                                <span class="db-success">Active</span>
                            @else
                                <span class="db-not-success">Cancelled</span>
                            @endif
                        </td>
                        <td>
                            @if($event_booking->payment == true)
                                <span class="db-success">Di Bayar</span>
                            @else
                                <span class="db-not-success">Tidak dibayarkan</span>
                            @endif
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td>Maaf, pemesanan promo tidak ditemukan.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="db-cent-3">
        <div class="db-cent-acti">
            <div class="db-title">
                <h3><img src="{{ asset("front/images/icon/review.png") }}" alt=""/> Ulasan</h3>
                <p>Ulasan terbaru dikirimkan oleh saya.</p>
            </div>
            <ul>
                @forelse($room_booking_with_reviews as $room_booking)
                <li>
                    <div class="db-cent-wr-img"> <img src="{{ asset("front/images/users/3.png") }}" alt=""> </div>
                    <div class="db-cent-wr-con">
                        <h6>Cafe Booking
                            @if($room_booking->status == "cancelled")
                                <span class="label label-danger">Cancelled</span>
                            @elseif($room_booking->status == "checked_in")
                                <span class="label label-primary">Checked In</span>
                            @elseif($room_booking->status == "checked_out")
                                <span class="label label-success">Checked Out</span>
                            @endif
                        </h6>
                        <span class="lr-revi-date">Review Date: {{ \Carbon\Carbon::parse($room_booking->review->updated_at)->format('Y-m-d') }}</span>
                        <br>
                        <span class="lr-revi-date">Rating: {{ $room_booking->review->rating }}/5</span>

                        <p>
                            {{ $room_booking->review->review }}
                        </p>
                        <a href="{{ url('dashboard/room/booking/'.$room_booking->review->id.'/review') }}" class="btn btn-danger btn-sm">Update Review</a>

                    </div>
                </li>
                    @empty
                    Maaf, Anda belum mengirimkan ulasan apa pun.
                    @endforelse
            </ul>
        </div>
    </div>
@endsection
