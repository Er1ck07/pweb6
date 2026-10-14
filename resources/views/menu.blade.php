@extends('layouts.app')

@section('title', 'Menu - Rice Bites')

@section('content')
    <section class="onibite-section">
        <h2>Menu Rice Bites</h2>
        <p style="text-align: center; color: var(--text-muted); margin-bottom: 2rem;">Setiap porsi berisi 6 pcs mini rice ball yang dibuat fresh setiap hari.</p>
        
        <div class="onibite-grid">
            @php
                $menuItems = $menuItems ?? [
                    ['name' => 'Rice Bites Original', 'icon' => '🍙', 'desc' => '6 pcs mini rice ball rasa original yang gurih dan lezat.', 'price' => 'Rp 12.000'],
                    ['name' => 'Rice Bites BBQ', 'icon' => '🍖', 'desc' => '6 pcs mini rice ball dengan bumbu BBQ smokey dan gurih.', 'price' => 'Rp 15.000'],
                    ['name' => 'Rice Bites Keju', 'icon' => '🧀', 'desc' => '6 pcs mini rice ball dengan taburan bumbu keju yang creamy.', 'price' => 'Rp 15.000'],
                ];
            @endphp

            @foreach($menuItems as $item)
                <div class="onibite-card">
                    <div class="onibite-card-img">{{ $item['icon'] }}</div>
                    <h3>{{ $item['name'] }}</h3>
                    <p>{{ $item['desc'] }}</p>
                    <div class="onibite-card-footer">
                        <span class="onibite-price">{{ $item['price'] }}</span>
                        <button class="onibite-btn-sm add-to-cart" data-item="{{ $item['name'] }}">Add</button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection