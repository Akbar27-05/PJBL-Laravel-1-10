@extends('Backend.back')

@section('admincontent')
<div class="row">
    <div class="col-6">
        <h3> Order Detail</h3>
    </div>

    <div class="col">
        <form action="{{ url('admin/orderdetail/create') }}" method="get">
            @csrf

            <div class="form-group float-start">
                <label>Tgl Mulai:</label>
                <input class="form-control" type="date" name="tglmulai" required>
            </div>

            <div class="form-group float-start ms-2">
                <label>Tgl Akhir:</label>
                <input class="form-control" type="date" name="tglakhir" required>
            </div>

            <div class="float-start mt-2 ms-2">
                <p> </p>
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>
    </div>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>pelanggan</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>total</th>
            </tr>
        </thead>
        @php
        $no=1;
        @endphp
        <tbody>
            @foreach ($details as $detail)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $detail->tglorder }}</td>
                <td>{{ $detail->pelanggan }}</td>
                <td>{{ $detail->menu }}</td>
                <td>{{ $detail->harga }}</td>
                <td>{{ $detail->jumlah }}</td>
                <td>{{ $detail->total }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center mt-4">
    {{ $details->withQueryString()->links() }}
</div>
@endsection