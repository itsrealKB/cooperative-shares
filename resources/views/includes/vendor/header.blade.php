<div class="content-wrapper">
    <header class="header">
        <div class="search-area">
            <div class="hamburger sidebarOpner">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="search-form">
                <form action="">
                    <input type="search" placeholder="Search">
                    <button>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="profile-det-area">
            <!-- <div class="dropdown">
            <a href="#" class="btn dropdown-toggle position-relative cart-view">
                <i class="fa-regular fa-heart"></i>
                <span class="badge">38</span>
            </a>
        </div> -->
            <div class="dropdown">
                <button class="btn dropdown-toggle position-relative" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-regular fa-bell"></i>
                    <span class="badge">12</span>
                </button>
                <ul class="dropdown-menu">
                    <li class="d-flex justify-content-between">
                        <p><span>12</span> Unread messages</p>
                        <a class="clear-btn" href="#">Clear All</a>
                    </li>
                    <li class="notify-li">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <img src="{{ asset('assets/vendor/images/person-img.png') }}" alt="">
                            </div>
                            <a href="#">
                                <h6>2min ago</h6>
                                <p>Donec dapibus mauris id odio ornare tempus amet.</p>
                            </a>
                        </div>
                    </li>
                    <li class="notify-li">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <img src="{{ asset('assets/vendor/images/person-img.png') }}" alt="">
                            </div>
                            <a href="#">
                                <h6>2min ago</h6>
                                <p>Donec dapibus mauris id odio ornare tempus amet.</p>
                            </a>
                        </div>
                    </li>
                    <li class="notify-li">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <img src="{{ asset('assets/vendor/images/person-img.png') }}" alt="">
                            </div>
                            <a href="#">
                                <h6>2min ago</h6>
                                <p>Donec dapibus mauris id odio ornare tempus amet.</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn dropdown-toggle position-relative profile-btn" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/vendor/images/person-img.png') }}" alt="">
                    <div>
                        <h5>Alexis Anderson</h5>
                        <h6>Vendor Profile</h6>
                    </div>
                </button>
                <ul class="dropdown-menu profile-menu">
                    <li class="prof-li">
                        <a class="" href="#"><i class="fa-solid fa-circle-user"></i> Profile</a>
                    </li>
                    <li class="prof-li">
                        <a class="" href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</a>
                    </li>
                </ul>
            </div>
        </div>

        <script>
            const hamburger = document.querySelector('.hamburger');         // for mobile
            const sidebar = document.querySelector('.side-bar');
            const closeBtn = document.querySelector('.close-sidebar');

            const hamburger2 = document.querySelector('.sidebarOpner');     // for desktop
            const sidebar2 = document.querySelector('.smallBar');

            let currentMode = null;

            function activateMobileSidebar() {
                if (currentMode === 'mobile') return;
                currentMode = 'mobile';

                // Remove previous listeners
                if (hamburger2) hamburger2.onclick = null;

                if (hamburger) {
                    hamburger.onclick = () => sidebar.classList.add('active');
                }

                if (closeBtn) {
                    closeBtn.onclick = () => sidebar.classList.remove('active');
                }
            }

            function activateDesktopSidebar() {
                if (currentMode === 'desktop') return;
                currentMode = 'desktop';

                // Remove previous listeners
                if (hamburger) hamburger.onclick = null;
                if (closeBtn) closeBtn.onclick = null;

                if (hamburger2) {
                    hamburger2.onclick = () => sidebar2.classList.toggle('collapsed');
                }

                // Mobile sidebar should be hidden if open
                if (sidebar) {
                    sidebar.classList.remove('active');
                }
            }

            function handleSidebarToggle() {
                if (window.innerWidth <= 991) {
                    activateMobileSidebar();
                } else {
                    activateDesktopSidebar();
                }
            }

            // Run on load
            handleSidebarToggle();

            // Run on window resize
            window.addEventListener('resize', handleSidebarToggle);
        </script>

    </header>
