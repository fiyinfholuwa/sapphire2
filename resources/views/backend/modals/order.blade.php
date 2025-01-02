







<div class="modal fade" id="status_{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="{{route('admin.order.status', $order->id)}}">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Order Status <span class="text-primary">({{$order->order_reference}}})</span></h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Select Option</label>
                        <select class="form-control" name="order_status">
                            <option value="pending"  {{$order->order_status =='pending' ? 'selected' : ""}}>pending</option>
                            <option value="processing" {{$order->order_status =='processing' ? 'selected' : ""}} >processing</option>
                            <option value="delivered" {{$order->order_status =='delivered' ? 'selected' : ""}} >delivered</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-cancel"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Proceed</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="payment_{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="{{route('admin.payment.resolution', $order->id)}}">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Payment Resolution <span class="text-primary">({{$order->order_reference}}})</h5>

                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Select Option</label>
                        <select class="form-control" name="payment_status">
                            <option value="pending"  {{$order->payment_status =='pending' ? 'selected' : ""}}>pending</option>
                            <option value="failed" {{$order->payment_status =='failed' ? 'selected' : ""}} >failed</option>
                            <option value="paid" {{$order->payment_status =='paid' ? 'selected' : ""}} >paid</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-cancel"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Proceed</button>
                </div>
            </div>
        </div>
    </form>
</div>








