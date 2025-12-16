(function() {
    // Initialize dropdown immediately
    initProfileDropdown();

    // Also initialize on DOM ready to ensure it works in all scenarios
    document.addEventListener('DOMContentLoaded', initProfileDropdown);

    function initProfileDropdown() {
        const profileContainer = document.getElementById('profile-container');
        if (!profileContainer) return; // Safety check

        // Only set up event listener if not already set
        if (!profileContainer.hasAttribute('data-initialized')) {

            // Toggle dropdown when profile is clicked
            profileContainer.addEventListener('click', function(e) {
                this.classList.toggle('active');
                e.stopPropagation();
            });

            // Mark as initialized
            profileContainer.setAttribute('data-initialized', 'true');

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                // Check if already initialized to prevent duplicate listeners
                if (!document.body.hasAttribute('data-dropdown-listener')) {
                    // Don't need to do anything - this is just a check
                }
                profileContainer.classList.remove('active');
            });

            // Mark body as having listener
            document.body.setAttribute('data-dropdown-listener', 'true');

            // Prevent dropdown from closing when clicking inside it
            const dropdownMenu = profileContainer.querySelector('.dropdown-menu');
            if (dropdownMenu) {
                dropdownMenu.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }
        }
    }
})();