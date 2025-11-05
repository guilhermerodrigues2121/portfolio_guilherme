@extends('layout.app')
@section('content')
    <!-- Loader Start -->
    
    <div id="loader" class="loader">
        <div class="loader__wrapper">
            <div class="loader__content">
                <div class="loader__count">
                    <span class="count__text">0</span>
                    <span class="count__percent">%</span>
                </div>
            </div>
        </div>
    </div>
    <main id="mxd-page-content" class="mxd-page-content">

        <livewire:herosection>
        <livewire:who-we-are>
        <livewire:projectsection>
        <livewire:educationsection>
        <livewire:workssection>
        <livewire:captionsection>
        <livewire:futurosection>
        <livewire:contactsection>
            <br>
            
    </main>
    <!-- Page Content End -->

    <!-- Footer Demo Start -->
    
@endsection
