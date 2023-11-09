<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Home</title>
    @include('style.style')
</head>
<body>
    <section>
        @include('Frontend.layouts.header')
        @include('Frontend.layouts.slider')
        @include('Frontend.layouts.jurusan')
        @include('Frontend.layouts.fasilitas')
        @include('Frontend.layouts.gallery')
        @include('Frontend.layouts.Footer')
    </section>
</body>
</html>