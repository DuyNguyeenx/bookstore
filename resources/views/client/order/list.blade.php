@extends('client.templates.layout')
@section('title', 'Danh sách đơn hàng')
@section('main')
    <div class="container-fluid py-5">
        <h1 class="text-center fs-2 fw-bold mb-5">Hóa đơn</h1>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr class="bg-success text-white">
                    <th scope="col">#</th>
                    <th scope="col">Tên người nhận</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Tổng</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($orders as $key => $order)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ formatNumberPrice($order->total_amount) }}</td>
                        <td>
                            @if ($order->status == 0)
                                <span class="badge bg-warning">Đang giao</span>
                            @elseif ($order->status == 1)
                                <span class="badge bg-success">Đã Giao</span>
                            @else
                                <span class="badge bg-danger">Thất bại</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('client.order.detail', $order->id) }}" class="btn">Xem</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>


        </table>
    </div>
@endsection
