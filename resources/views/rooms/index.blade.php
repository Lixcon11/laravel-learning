<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" src="{{ asset('js/index.js') }}" defer></script>
    <title>Rooms</title>
</head>
<body>
    <header>
        <div class="container">
            <!-- Your header code here -->
        </div>
    </header>
    <main>
        <section>
            <p>The ultimate luxury</p>
            <h2>Rooms</h2>
        </section>
        <section class="roomsList">
            <div class="swiper" id="swiper-rooms-list">
                <div class="swiper-wrapper">
                    @foreach($rooms as $room)
                        <div class="swiper-slide">
                            <article>
                                <img src="{{ asset('assets/images/bedroom.webp') }}" alt="Room Image">
                                <div class="filters">
                                    @foreach(json_decode($room->amenities) as $amenity)
                                        <img class="icon icon--smallest" src="{{ asset('assets/icons/filter/' . $amenity . '.webp') }}" alt="{{ $amenity }}">
                                    @endforeach
                                </div>
                                <h3>{{ $room->roomType }}</h3>
                                <p>{{ $room->description }}</p>
                                <div>
                                    <p class="price">${{ $room->price }}/Night</p>
                                    <a href="#">Booking Now</a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </main>
    <footer>
        <!-- Footer code here -->
    </footer>
</body>
</html>