
@extends('frontend_new.app')

@section('content')
    <!-- Intro Section -->
    <div style="padding-top: 200px;" class="productlist padding_all">

        <div style="background-color: #ffffff; padding-top: 100px; padding-bottom: 100px;" id="product-detail-section" class="padding pb-60 pt-xs-60">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5>My Orders</h5>
                            <input
                                type="text"
                                id="searchInput"
                                class="form-control form-control-sm"
                                placeholder="Search orders..."
                                style="max-width: 300px;"
                            />
                        </div>

                        @if ($orders->count() === 0)
                            <!-- No Orders Found -->
                            <div class="text-center mt-4">
                                <h6>No orders yet!</h6>
                                <a href="{{ route('product') }}" class="btn btn-primary mt-2">Shop Now</a>
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-sm" id="ordersTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Order Reference</th>
                                        <th>Address</th>
                                        <th>Total Amount</th>
                                        <th>Payment Status</th>
                                        <th>Order Status</th>
                                        <th>Date Created</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td class="align-middle">{{ $loop->iteration }}</td>
                                            <td class="align-middle">{{ $order->order_reference }}</td>
                                            <td class="align-middle">{{ $order->address ?? 'N/A' }}</td>
                                            <td class="align-middle">{{ number_format($order->total_amount, 2) }}</td>
                                            <td class="align-middle">
                                                @if($order->payment_status == 'paid')
                                                    <span class="badge bg-success">Paid</span>
                                                @else
                                                    <span class="badge bg-warning">{{ ucfirst($order->payment_status) }}</span>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                @if($order->order_status == 'delivered')
                                                <span class="badge bg-success">Delivered</span>
                                                @else
                                                    <span class="badge bg-warning">{{ ucfirst($order->order_status) }}</span>
                                                @endif
                                            <td class="align-middle">{{ $order->created_at->format('Y-m-d') }}</td>
                                            <td class="">

                                                    <a href="{{route('view.invoice', $order->id)}}" class="btn btn-primary download-invoice mt-1">
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                @if($order->payment_status !=='paid')
                                                    <a href="{{route('repay.bill', $order->id)}}" class="btn btn-success download-invoice mt-1">
                                                        Make Payment  <i class="fa fa-money-bill-wave-alt"></i>
                                                    </a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div id="pagination" class="d-flex justify-content-center mt-3"></div>
                        @endif
                    </div>
                </div>
            </div>

            <script>
                // Initialize variables
                const rowsPerPage = 10;
                let currentPage = 1;

                // Get all rows and the search input
                const rows = Array.from(document.querySelectorAll("#ordersTable tbody tr"));
                const searchInput = document.querySelector("#searchInput");
                const ordersTableBody = document.querySelector("#ordersTable tbody");
                const pagination = document.querySelector("#pagination");

                // Function to display rows
                function displayRows(page = 1, searchKeyword = "") {
                    // Filter rows based on searchKeyword
                    const filteredRows = rows.filter((row) =>
                        row.innerText.toLowerCase().includes(searchKeyword.toLowerCase())
                    );

                    // Calculate the range for current page
                    const start = (page - 1) * rowsPerPage;
                    const end = page * rowsPerPage;

                    // Clear the table body and render rows for the current page
                    ordersTableBody.innerHTML = "";
                    if (filteredRows.length > 0) {
                        filteredRows.slice(start, end).forEach((row) => {
                            ordersTableBody.appendChild(row);
                        });
                    } else if (searchKeyword) {
                        ordersTableBody.innerHTML =
                            '<tr><td colspan="8" class="text-center">No results found</td></tr>';
                    } else {
                        rows.slice(start, end).forEach((row) => {
                            ordersTableBody.appendChild(row);
                        });
                    }

                    // Update pagination
                    updatePagination(filteredRows.length, page);
                }

                // Function to update pagination
                function updatePagination(totalRows, currentPage) {
                    pagination.innerHTML = "";
                    const totalPages = Math.ceil(totalRows / rowsPerPage);

                    for (let i = 1; i <= totalPages; i++) {
                        const button = document.createElement("button");
                        button.className = `btn btn-sm ${i === currentPage ? "btn-primary" : "btn-dark"} mx-1`;
                        button.textContent = i;
                        button.addEventListener("click", () => {
                            displayRows(i, searchInput.value);
                        });
                        pagination.appendChild(button);
                    }
                }

                // Event listener for search input
                searchInput.addEventListener("input", (e) => {
                    const searchKeyword = e.target.value.trim();
                    currentPage = 1; // Reset to the first page
                    displayRows(currentPage, searchKeyword);
                });

                // Event listener for actions
                document.querySelector("#ordersTable").addEventListener("click", (e) => {
                    const button = e.target.closest("button");
                    if (button) {
                        const orderId = button.dataset.id;
                        if (button.classList.contains("view-invoice")) {
                            alert(`View invoice for order ID: ${orderId}`);
                        } else if (button.classList.contains("download-invoice")) {
                            alert(`Download invoice for order ID: ${orderId}`);
                        }
                    }
                });

                // Initialize table if rows exist
                if (rows.length > 0) {
                    displayRows(currentPage);
                }
            </script>

        </div>
    </div>

    <style>
        .empty-cart p {
            margin-bottom: 20px;
        }
        .empty-cart a {
            font-size: 1.2em;
        }
    </style>

    <style>
        .padding_all {
            background-color: #0c4c91 !important;
        }

    </style>


@endsection
