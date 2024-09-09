<x-guest-layout>
    <div class="page section-header text-center ">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Bill Book / Invoice</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 mt-5">
                <div class="d-flex justify-content-center " id="content-to-print">
                    @forelse ($orders as $order)
                    <table class="invoice_table">
                        <tr>
                            <th class="s_name" colspan="2">{{$shop->fullname}} </th>
                            <th colspan="3">INVOICE</th>
                        </tr>
                        <tr>
                            <th colspan="2">Shop Addres : <span style="margin-left: 2;">{{
                                    $postsById[$order->add_id]->city}}</span></th>
                            <th colspan="3">Invoice No. : <span style="margin-left: 2;">{{ $order->id }}</span></th>
                        </tr>
                        <tr>
                            <th colspan="5">Shop Phone: <span style="margin-left: 2;">{{
                                    $postsById[$order->add_id]->number}}</span></th>
                        </tr>
                        <tr>
                            <th colspan="5">Shop Email : <span style="margin-left: 2;">{{$shop->email}}</span></th>
                        </tr>
                        <tr>
                            <th colspan="5">Name :
                                <span style="margin-left: 2;">{{$customar->fullname}}</span>
                            </th>
                        </tr>
                        <tr>
                            <th>Address : <span style="margin-left: 2;">{{$order->city}}</span></th>
                            <th>Number :
                                <span style="margin-left: 2;">{{$order->number}}</span>
                            </th>
                            <th>Zip Code :
                                <span style="margin-left: 2;">{{$order->zip_code}}</span>
                            </th>
                        </tr>
                        <tr>
                            <th class="tr_b">SL. No.</th>
                            <th class="tr_b w-50">Description</th>
                            <th class="tr_b">Quantity</th>
                            <th class="tr_b">Rate</th>
                            <th class="tr_b">Amount</th>
                        </tr>
                        <tr>
                            <th class="tr_b">
                                {{ $order->id }}
                            </th>
                            <th class="tr_b">
                                {{ $postsById[$order->add_id]->name}} <br>
                                <span>* {{ $order->color }}</span><br>
                                <span>* {{ $order->size }}</span><br>
                                <span>* {{ $order->weight }}</span><br>
                            </th>
                            <th class="tr_b">
                                {{ $order->quantity }}
                            </th>
                            <th class="tr_b">
                                {{ $postsById[$order->add_id]->discounted_price}}
                            </th>
                            <th class="tr_b">
                                {{ $order->total_amount }}
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4" class="tr_b">Total</th>
                            <th class="tr_b">
                                {{ $order->total_amount }}
                            </th>
                        </tr>
                    </table>
                    @empty
                    <tr>
                        <td colspan="9">Not Found</td>
                    </tr>
                    @endforelse
                </div>

                <div class="text-center">
                    <button id="print-button" class="btn btn-success">Print</button>
                </div>
            </div>
        </div>

    </div>


    @push('styles')
    @endpush
    @push('script')
    <script>
        document.getElementById('print-button').addEventListener('click', function () {
            var content = document.getElementById('content-to-print').innerHTML;
            var originalContent = document.body.innerHTML;

            document.body.innerHTML = content;

            window.print();

            document.body.innerHTML = originalContent;
        });
    </script>
    @endpush
</x-guest-layout>