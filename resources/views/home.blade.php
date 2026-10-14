@extends('layouts.app')

@section('title', 'Home - Rice Bites')

@section('content')
    <!-- Hero Section -->
    <header class="onibite-hero">
        <div class="onibite-hero-content">
            <span class="onibite-badge">Freshly Handcrafted Daily</span>
            <h1 class="onibite-title">Makan Enak Ga Pake Ribet</h1>
            <p class="onibite-subtitle">Nikmati Rice Bites, bola-bola nasi gurih ukuran sekali gigit. Dibuat fresh setiap hari dengan porsi 6 pcs per paket!</p>
            <div class="onibite-hero-actions">
                <a href="/menu" class="onibite-btn-primary">Explore Menu</a>
                <a href="#about" class="onibite-btn-outline">Our Story</a>
            </div>
        </div>
    </header>

    <!-- Menu Section -->
    <section id="menu" class="onibite-section">
        <h2>Varian Rasa Favorit</h2>
        <div class="onibite-grid">
            <div class="onibite-card">
                <div class="onibite-card-img">🍙</div>
                <h3>Original</h3>
                <p>6 pcs mini rice ball rasa original dengan bumbu gurih otentik dan taburan wijen renyah.</p>
                <div class="onibite-card-footer">
                    <span class="onibite-price">Rp 12.000</span>
                    <button class="onibite-btn-sm add-to-cart" data-item="Original (6 pcs)">Add</button>
                </div>
            </div>
            <div class="onibite-card">
                <div class="onibite-card-img">🍖</div>
                <h3>Smoky BBQ</h3>
                <p>6 pcs mini rice ball dibalur bumbu BBQ manis gurih dengan aroma asap yang menggugah selera.</p>
                <div class="onibite-card-footer">
                    <span class="onibite-price">Rp 15.000</span>
                    <button class="onibite-btn-sm add-to-cart" data-item="Smoky BBQ (6 pcs)">Add</button>
                </div>
            </div>
            <div class="onibite-card">
                <div class="onibite-card-img">🧀</div>
                <h3>Savory Keju</h3>
                <p>6 pcs mini rice ball dengan bumbu keju melimpah yang gurih, creamy, dan bikin nagih.</p>
                <div class="onibite-card-footer">
                    <span class="onibite-price">Rp 15.000</span>
                    <button class="onibite-btn-sm add-to-cart" data-item="Savory Keju (6 pcs)">Add</button>
                </div>
            </div>
        </div>
    </section>
@endsection