<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Ridho Jaya Logam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    #navbar {
        z-index: 50;
    }
    
    .h-screen {
        height: 100vh;
    }
</style>
</head>
<body>
    @include('partials.navbar')
    
    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('#navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white', 'shadow-md');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('bg-white', 'shadow-md');
            }
        });
    </script>
    <script>
    // Carousel Script
    document.addEventListener('DOMContentLoaded', function() {
        const carouselItems = document.querySelectorAll('#carousel > div');
        let currentItem = 0;
        
        function showNextItem() {
            // Hide current item
            carouselItems[currentItem].classList.remove('opacity-100');
            carouselItems[currentItem].classList.add('opacity-0');
            
            // Move to next item
            currentItem = (currentItem + 1) % carouselItems.length;
            
            // Show next item
            carouselItems[currentItem].classList.remove('opacity-0');
            carouselItems[currentItem].classList.add('opacity-100');
        }
        
        // Change image every 5 seconds
        setInterval(showNextItem, 5000);
    });
</script>
</body>
</html>