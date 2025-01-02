<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="page-content container" id="content-to-download">

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="text-center">
                        <button id="download-pdf" class="btn btn-primary">Download as PDF</button>
                    </div>

                    <div class="col-12">
                        <div class="text-center text-150">
                            <img style="width:200px; height: 200px;" src="{{asset('frontend_new/assets/images/logo2.png')}}" alt="Logo">
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-grey-m2">
                            <div class="my-1">
                                <span style="font-weight: bolder;">Address</span>: {{ $order['address'] }}
                            </div>
                            <div class="my-1">
                                Email: {{ $order['email'] }}
                            </div>
                            <div class="my-1">
                                Order Reference: {{ $order['order_reference'] }}
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Receipt
                            </div>


                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> {{ \Carbon\Carbon::parse($order['created_at'])->format('M d, Y') }}</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Payment Status:</span>
                                <span class="badge {{ $order['payment_status'] === 'paid' ? 'bg-success' : 'bg-warning' }} badge-pill px-25">
                                    {{ ucfirst($order['payment_status']) }}
                                </span>
                            </div>
                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Order Status:</span>
                                <span class="badge {{ $order['order_status'] === 'delivered' ? 'bg-success' : 'bg-warning' }} badge-pill px-25">
                                    {{ ucfirst($order['order_status']) }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="mt-4">
                    <div class="row text-600 text-white bgc-default-tp1 py-25">
                        <div class="d-none d-sm-block col-1">#</div>
                        <div class="col-9 col-sm-5">Description</div>
                        <div class="d-none d-sm-block col-4 col-sm-2">Qty</div>
                        <div class="d-none d-sm-block col-sm-2">Unit Price</div>
                        <div class="col-2">Amount</div>
                    </div>

                    <div class="text-95 text-secondary-d3">
                        @foreach(json_decode($order['order_info'], true) as $index => $item)
                            <div class="row mb-2 mb-sm-0 py-25 {{ $index % 2 == 0 ? 'bgc-default-l4' : '' }}">
                                <div class="d-none d-sm-block col-1">{{ $index + 1 }}</div>
                                <div class="col-9 col-sm-5">{{ $item['product']['title'] }}</div>
                                <div class="d-none d-sm-block col-2">{{ $item['quantity'] }}</div>
                                <div class="d-none d-sm-block col-2 text-95">&#8358;{{  $item['discounted_price'] }}.00</div>
                                <div class="col-2 text-secondary-d2">&#8358;{{ $item['quantity'] * $item['discounted_price'] }}.00</div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row border-b-2 brc-default-l2"></div>

                    <div class="row mt-3">
                        <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                            <div class="total">
                                Amount In Words
                                <div class="amount-in-words">({{ ucwords((new \NumberFormatter('en', \NumberFormatter::SPELLOUT))->format($order['total_amount'])) }} Naira Only)</div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                            <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                <div class="col-7 text-right">
                                    Total Amount
                                </div>
                                <div class="col-5">
                                    <span class="text-150 text-success-d3 opacity-2">&#8358;{{ $order['total_amount'] }}.00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr />

                    @if($show_go_back)
                        <div>
                            <a href="{{ route('my.order') }}" class="btn btn-danger btn-bold px-4 float-right mt-3 mt-lg-0">Go Back</a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body{
        margin-top:40px;
        color: #484b51;
    }
    .text-secondary-d1 {
        color: navy !important;
    }
    .page-header {
        margin: 0 0 1rem;
        padding-bottom: 1rem;
        padding-top: .5rem;
        border-bottom: 1px dotted #e2e2e2;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-align: center;
        align-items: center;
    }
    .page-title {
        padding: 0;
        margin: 0;
        font-size: 1.75rem;
        font-weight: 300;
    }
    .brc-default-l1 {
        border-color: #dce9f0!important;
    }

    .ml-n1, .mx-n1 {
        margin-left: -.25rem!important;
    }
    .mr-n1, .mx-n1 {
        margin-right: -.25rem!important;
    }
    .mb-4, .my-4 {
        margin-bottom: 1.5rem!important;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0,0,0,.1);
    }

    .text-grey-m2 {
        color: #888a8d!important;
    }

    .text-success-m2 {
        color: #86bd68!important;
    }

    .font-bolder, .text-600 {
        font-weight: 600!important;
    }

    .text-110 {
        font-size: 110%!important;
    }
    .text-blue {
        color: #478fcc!important;
    }
    .pb-25, .py-25 {
        padding-bottom: .75rem!important;
    }

    .pt-25, .py-25 {
        padding-top: .75rem!important;
    }
    .bgc-default-tp1 {
        background-color: navy !important;
    }
    .bgc-default-l4, .bgc-h-default-l4:hover {
        background-color: #f3f8fa!important;
    }
    .page-header .page-tools {
        -ms-flex-item-align: end;
        align-self: flex-end;
    }

    .btn-light {
        color: #757984;
        background-color: #f5f6f9;
        border-color: #dddfe4;
    }
    .w-2 {
        width: 1rem;
    }

    .text-120 {
        font-size: 120%!important;
    }
    .text-primary-m1 {
        color: #4087d4!important;
    }

    .text-danger-m1 {
        color: #dd4949!important;
    }
    .text-blue-m2 {
        color: navy !important;
    }
    .text-150 {
        font-size: 150%!important;
    }
    .text-60 {
        font-size: 60%!important;
    }
    .text-grey-m1 {
        color: #7b7d81!important;
    }
    .align-bottom {
        vertical-align: bottom!important;
    }


</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<script>
    document.getElementById('download-pdf').addEventListener('click', function () {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        // Get the elements to hide
        const downloadButton = document.getElementById('download-pdf');
        const goBackButton = document.querySelector('.btn-danger'); // Assuming this is the "Go Back" button

        // Hide the elements
        downloadButton.style.display = 'none';
        goBackButton.style.display = 'none';

        // Capture the content of the div with ID 'content-to-download'
        const content = document.getElementById('content-to-download');

        // Ensure that images are loaded
        const images = content.querySelectorAll('img');
        let loadedImages = 0;
        let totalImages = images.length;

        // Function to check if all images are loaded
        const checkImagesLoaded = () => {
            if (++loadedImages === totalImages) {
                // Convert HTML content to PDF (using html2pdf)
                html2pdf()
                    .from(content)
                    .toPdf()
                    .get('pdf')
                    .then(function (pdf) {
                        // Save the PDF
                        pdf.save('order_receipt_{{$order['order_reference']}}.pdf');

                        // Show the elements back after the PDF is saved
                        downloadButton.style.display = 'block';
                        goBackButton.style.display = 'block';
                    });
            }
        };

        // Add an event listener to each image to check when they are loaded
        images.forEach(image => {
            if (image.complete) {
                checkImagesLoaded();
            } else {
                image.onload = checkImagesLoaded;
            }
        });

        // If no images, directly generate the PDF
        if (totalImages === 0) {
            html2pdf()
                .from(content)
                .toPdf()
                .get('pdf')
                .then(function (pdf) {
                    // Save the PDF
                    pdf.save('order_receipt_{{$order['order_reference']}}.pdf');

                    // Show the elements back after the PDF is saved
                    downloadButton.style.display = 'block';
                    goBackButton.style.display = 'block';
                });
        }
    });
</script>
