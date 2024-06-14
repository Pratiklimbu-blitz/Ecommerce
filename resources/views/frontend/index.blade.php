@extends('Frontend.layouts.master')
@section('component')
    <main class="main">
        <div class="container">
            <div class="row">
                @foreach ($product as $item)
                    <div class="col-lg-4">
                        <div class="" style="width: 18rem;">
                            <img src="{{ $item->image }}" class="card-img-top" alt="https://source.unsplash.com/XGDBdSQ70O0">
                            <div class="body">
                                <h5 class="product-title">{{ $item->name }}</h5>
                                <h6 class="product-price">${{ $item->unit_price }}</h6>
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-{{ $item->id }}">add to cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add quantity</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="number" placeholder="quantity" class="form-control"
                                        id="cart-qty-{{ $item->id }}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" onclick="submitForm('{{ $item->id }}')"
                                        class="btn btn-primary">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



       
        </div><!-- End .row -->
        </div><!-- End .products -->
        </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
        </div><!-- End .container -->

    </main><!-- End .main -->
@endsection
