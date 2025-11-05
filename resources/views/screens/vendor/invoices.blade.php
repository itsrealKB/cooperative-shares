@extends('layouts.vendor.app')

@section('section')
    <section class="main-content-area">
        <h1 class="dashboard-hd">Invoices</h1>
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
                        <th>Invoices No</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Totals</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$199/Monthly</td>
                        <td>Lorem Ipsum</td>
                        <td>02-04-2025</td>
                        <td class="status-completed">$230.00</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu" style="display: none;">
                                <div class="custom-dropdown-item">View</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>$199/Monthly</td>
                        <td>Lorem Ipsum</td>
                        <td>02-04-2025</td>
                        <td class="status-pending">$230.00</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu" style="display: none;">
                                <div class="custom-dropdown-item">View</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>$199/Monthly</td>
                        <td>Lorem Ipsum</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">$230.00</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu" style="display: none;">
                                <div class="custom-dropdown-item">View</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>$199/Monthly</td>
                        <td>Lorem Ipsum</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">$230.00</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu" style="display: none;">
                                <div class="custom-dropdown-item">View</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>$199/Monthly</td>
                        <td>Lorem Ipsum</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">$230.00</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu" style="display: none;">
                                <div class="custom-dropdown-item">View</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>$199/Monthly</td>
                        <td>Lorem Ipsum</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">$230.00</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu" style="display: none;">
                                <div class="custom-dropdown-item">View</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>$199/Monthly</td>
                        <td>Lorem Ipsum</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">$230.00</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu" style="display: none;">
                                <div class="custom-dropdown-item">View</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>$199/Monthly</td>
                        <td>Lorem Ipsum</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">$230.00</td>
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu" style="display: none;">
                                <div class="custom-dropdown-item">View</div>
                                <div class="custom-dropdown-item text-danger">Delete</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>$199/Monthly</td>
                        <td>Lorem Ipsum</td>
                        <td>02-04-2025</td>
                        <td class="status-cancelled">$230.00</td>
                        <!-- <td class="action-cell position-relative">

                                    <i class="fa-solid fa-ellipsis-vertical action-toggle" style="cursor: pointer;"></i>

                                    <div class="action-menu">
                                        <div class="action-item View-item px-3 py-2" style="cursor: pointer;">View
                                        </div>
                                        <div class="action-item delete-item px-3 py-2 text-danger" style="cursor: pointer;">
                                            Delete</div>
                                    </div>
                                </td> -->
                        <td class="position-relative custom-action-cell">
                            <i class="fa-solid fa-ellipsis-vertical custom-toggle" style="cursor: pointer;"></i>

                            <div class="custom-dropdown-menu" style="display: none;">
                                <div class="custom-dropdown-item">View</div>
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
                    <button class="active">1</button>
                    <button>2</button>
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
