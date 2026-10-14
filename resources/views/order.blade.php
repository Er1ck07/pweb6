@extends('layouts.app')

@section('title', 'Place Order - Rice Bites')

@section('content')
    <section class="onibite-section" style="max-width: 600px;">
        <h2>Pesan Rice Bites</h2>
        <p style="text-align: center; color: var(--text-muted); margin-bottom: 2rem;">Pilih rasa favoritmu (1 porsi isi 6 pcs mini rice ball).</p>

        @if(session('success'))
            <div style="background-color: #d1e7dd; color: #0f5132; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; text-align: center; font-weight: 500;">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div style="background-color: #f8d7da; color: #842029; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem;">
                <ul style="margin: 0; padding-left: 1.25rem;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/order" method="POST" style="background: var(--card-bg); border: 1px solid var(--border-color); padding: 2rem; border-radius: 12px;">
            @csrf
            
            <div style="margin-bottom: 1.25rem;">
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Nama Lengkap</label>
                <input type="text" name="name" value="{{ old('name') }}" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 6px; font-family: inherit;">
            </div>

            <div style="margin-bottom: 1.25rem;">
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Nomor WhatsApp/HP</label>
                <input type="text" name="phone" value="{{ old('phone') }}" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 6px; font-family: inherit;">
            </div>

            <div style="margin-bottom: 1.25rem;">
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Pilih Rasa (1 Porsi = 6 pcs)</label>
                <select name="item" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 6px; font-family: inherit; background: white;">
                    <option value="">-- Pilih Varian Rice Bites --</option>
                    <option value="Rice Bites Original">Rice Bites Original (Rp 12.000)</option>
                    <option value="Rice Bites BBQ">Rice Bites BBQ (Rp 15.000)</option>
                    <option value="Rice Bites Keju">Rice Bites Keju (Rp 15.000)</option>
                </select>
            </div>

            <div style="margin-bottom: 1.25rem;">
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Jumlah Porsi</label>
                <input type="number" name="quantity" min="1" value="1" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 6px; font-family: inherit;">
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Alamat Pengiriman</label>
                <textarea name="address" rows="3" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 6px; font-family: inherit;">{{ old('address') }}</textarea>
            </div>

            <button type="submit" class="onibite-btn-primary" style="width: 100%; padding: 0.75rem; font-size: 1rem;">Konfirmasi & Pesan Sekarang</button>
        </form>
    </section>
@endsection