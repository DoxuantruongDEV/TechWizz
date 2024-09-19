    <!-- Library Bundle Script -->
    <script src="{{ asset('js/core/libs.min.js') }}"></script>
    
    <!-- External Library Bundle Script -->
    <script src="{{ asset('js/core/external.min.js') }}"></script>
    
    <!-- Widgetchart Script -->
    <script src="{{ asset('js/charts/widgetcharts.js') }}"></script>
    
    <!-- mapchart Script -->
    <script src="{{ asset('js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('js/charts/dashboard.js') }}" ></script>
    
    <!-- fslightbox Script -->
    <script src="{{ asset('js/plugins/fslightbox.js') }}"></script>
    
    <!-- Settings Script -->
    <script src="{{ asset('js/plugins/setting.js') }}"></script>
    
    <!-- Slider-tab Script -->
    <script src="{{ asset('js/plugins/slider-tabs.js') }}"></script>
    
    <!-- Form Wizard Script -->
    <script src="{{ asset('js/plugins/form-wizard.js') }}"></script>
    
    <!-- AO~S Animation Plugin-->
    <script src="{{ asset('vendor/aos/dist/aos.js') }}"></script>
    
    <!-- App Script -->
    <script src="{{ asset('js/hope-ui.js') }}" defer></script>
    <!-- resources/views/admin/layout/sidebar.blade.php -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuItems = document.querySelectorAll('.nav-item .nav-link');

        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                // Remove 'active' class from all items
                menuItems.forEach(i => i.classList.remove('active'));

                // Add 'active' class to the clicked item
                this.classList.add('active');
            });
        });
    });
</script>

  </body>
</html>