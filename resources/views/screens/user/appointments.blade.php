@extends('layouts.user.app')

@section('section')
    <section class="main-content-area">
        <h1 class="dashboard-hd">Appointments</h1>
        <!-- <div class="table-container">
                <table>
                 <thead>
                    <tr>
                         <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Email Address</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                 </thead>
                </table>
                </div> -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Email Address</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nike Johnson</td>
                        <td>+92 122 343 4059</td>
                        <td>infoexample@gmail.com</td>
                        <td>02-04-2025</td>
                        <td class="status-completed">Completed</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu">
                                <div class="custom-dropdown-item">Edit</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nike Johnson</td>
                        <td>+92 122 343 4059</td>
                        <td>infoexample@gmail.com</td>
                        <td>02-04-2025</td>
                        <td class="status-pending">Pending</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu">
                                <div class="custom-dropdown-item">Edit</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nike Johnson</td>
                        <td>+92 122 343 4059</td>
                        <td>infoexample@gmail.com</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">Cancelled</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu">
                                <div class="custom-dropdown-item">Edit</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>Nike Johnson</td>
                        <td>+92 122 343 4059</td>
                        <td>infoexample@gmail.com</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">Completed</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu">
                                <div class="custom-dropdown-item">Edit</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nike Johnson</td>
                        <td>+92 122 343 4059</td>
                        <td>infoexample@gmail.com</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">Cancelled</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu">
                                <div class="custom-dropdown-item">Edit</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nike Johnson</td>
                        <td>+92 122 343 4059</td>
                        <td>infoexample@gmail.com</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">Pending</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu">
                                <div class="custom-dropdown-item">Edit</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nike Johnson</td>
                        <td>+92 122 343 4059</td>
                        <td>infoexample@gmail.com</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">Completed</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu">
                                <div class="custom-dropdown-item">Edit</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nike Johnson</td>
                        <td>+92 122 343 4059</td>
                        <td>infoexample@gmail.com</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">Cancelled</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu">
                                <div class="custom-dropdown-item">Edit</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nike Johnson</td>
                        <td>+92 122 343 4059</td>
                        <td>infoexample@gmail.com</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">Completed</td>
                        <!-- <td class="action-cell position-relative">

                                    <i class="fa-solid fa-ellipsis-vertical action-toggle" style="cursor: pointer;"></i>

                                    <div class="action-menu">
                                        <div class="action-item edit-item px-3 py-2" style="cursor: pointer;">Edit
                                        </div>
                                        <div class="action-item delete-item px-3 py-2 text-danger" style="cursor: pointer;">
                                            Delete</div>
                                    </div>
                                </td> -->
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu">
                                <div class="custom-dropdown-item">Edit</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <!-- Repeat more rows as needed -->
                </tbody>
            </table>

            <div class="pagination-wrapper pagination-wrapper-apo">
                <div class="pag-para">
                    <p>Showing <span>1</span> of <span>6</span> Results</p>
                </div>
                <div class="pagination-btns">
                    <button>
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button>1</button>
                    <button class="active">2</button>
                    <button>3</button>
                    <button>
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Dropdown toggle logic
            const toggles = document.querySelectorAll(".action-toggle");

            toggles.forEach(toggle => {
                toggle.addEventListener("click", function (e) {
                    e.stopPropagation();

                    // Close all other open menus
                    document.querySelectorAll(".action-menu").forEach(menu => {
                        if (menu !== this.nextElementSibling) {
                            menu.style.display = "none";
                        }
                    });

                    // Toggle current one
                    const menu = this.nextElementSibling;
                    menu.style.display = (menu.style.display === "block") ? "none" : "block";
                });
            });

            // Close dropdown if clicked outside
            document.addEventListener("click", function () {
                document.querySelectorAll(".action-menu").forEach(menu => {
                    menu.style.display = "none";
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggles = document.querySelectorAll(".custom-toggle");

            toggles.forEach((toggle) => {
                toggle.addEventListener("click", function (e) {
                    e.stopPropagation();
                    const menu = this.parentElement.querySelector(".custom-dropdown-menu");

                    // Close other open dropdowns
                    document.querySelectorAll(".custom-dropdown-menu").forEach((m) => {
                        if (m !== menu) m.style.display = "none";
                    });

                    // Toggle current dropdown
                    menu.style.display = menu.style.display === "block" ? "none" : "block";
                });
            });

            // Hide dropdown if clicked outside
            document.addEventListener("click", function () {
                document.querySelectorAll(".custom-dropdown-menu").forEach((menu) => {
                    menu.style.display = "none";
                });
            });
        });
    </script>
@endpush
