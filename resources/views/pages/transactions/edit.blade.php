@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Transaksi <small>{{ $item->uuid }}</small></strong>
            <small>{{ $item->name }}</small>
        </div>
        <div class="card-body">
            <div class="card-block">
                <form action="{{ route('transactions.update', $item->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="customer_name" class="form-control-label">Nama Pemesan</label>
                        <input type="text" name="customer_name"
                            value="{{ old('customer_name') ? old('customer_name') : $item->customer_name }}"
                            class="form-control @error('customer_name') is-invalid @enderror" />
                        @error('customer_name')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="customer_email" class="form-control-label">Email</label>
                        <input type="text" name="customer_email"
                            value="{{ old('customer_email') ? old('customer_email') : $item->customer_email }}"
                            class="form-control @error('customer_email') is-invalid @enderror" />
                        @error('customer_email')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="customer_number" class="form-control-label">Nomor Hp</label>
                        <input type="text" name="customer_number"
                            value="{{ old('customer_number') ? old('customer_number') : $item->customer_number }}"
                            class="form-control @error('customer_number') is-invalid @enderror" />
                        @error('customer_number')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="customer_address" class="form-control-label">Alamat Pemesan</label>
                        <input type="text" name="customer_address"
                            value="{{ old('customer_address') ? old('customer_address') : $item->customer_address }}"
                            class="form-control @error('customer_address') is-invalid @enderror" />
                        @error('customer_address')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Ubah Transaksi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
