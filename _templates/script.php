<!-- ========== Main Script ============  -->
<script defer src="./js/script.js"></script>

<!-- ================== AOS Initialization ================== -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
    const lightbox = GLightbox({
        selector: '.glightbox',    // CSS selector for lightbox links
        skin: 'clean',             // 'clean', 'dark', 'mobile', etc. (look & feel)
        loop: true,                // Enable gallery loop (last → first)
        zoomable: true,            // Allow zooming on images
        draggable: true,           // Drag images on desktop
        keyboardNavigation: true,  // Arrow keys navigation
        closeButton: true,         // Show close button
        touchNavigation: true,     // Swipe support for touch devices

        openEffect: 'zoom',        // Animation on open: 'zoom', 'fade', 'none'
        closeEffect: 'zoom',       // Animation on close
        slideEffect: 'slide',      // Animation between slides: 'slide', 'fade', 'zoom', 'none'
        touchFollowAxis: true,     // Restrict swipe to one axis

    });
</script>