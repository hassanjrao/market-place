<div>
    <!-- Start Add to Cart Area -->
    <section class="add-to-cart-p section-padding">
        <div class="container">
            <!-- Cart Table -->
            <div class="row table-responsive">
                <table class="table shopping-cart-tabel table-bordered align-middle table-striped table-hover">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Product</td>
                            <td>Title</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Total</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $ind => $product)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td class="text-center product-thumbnail">
                                    <img src="{{ $product['main_image'] }}" alt="product">
                                </td>
                                <td class="text-center product-name">
                                    <a href="#">{{ $product['title'] }}</a>
                                </td>
                                <td class="text-center product-price-cart">
                                    <span>{{ config('app.currency') }} {{ $product['original_price'] }}</span>
                                </td>
                                <td class="prodcut-quantity text-center">
                                    <input type="number" min="1" class="form-control"
                                        wire:model='products.{{ $ind }}.quantity'>
                                </td>
                                <td class="text-center product-price-cart">
                                    <span>{{ config('app.currency') }} {{ $product['total_price'] }}</span>
                                </td>
                                <td class="product-remove text-center">
                                    <a wire:click="removeFromCart({{ $product['id'] }})">
                                        <i class="bi bi-x"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- Cart Update -->
            <div class="row mt-30">
                <div class="col-6 mb-30">
                    <a class="button-1 border-radious-0" href="{{ route('products.index') }}">Continue Shopping</a>
                </div>

                <div class="col-6 mb-30">
                    <form id="payment-form" action="{{ route("payments.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @foreach ($products as $ind => $product)
                            <input type="hidden" name="products[{{ $ind }}][id]" value="{{ $product['id'] }}">
                            <input type="hidden" name="products[{{ $ind }}][quantity]"
                                value="{{ $product['quantity'] }}">
                            
                        @endforeach

                        <div class="card">
                            <div class="card-header bg-transparent py-3">
                                <h6 class="m-0 mb-1">Order Total</h6>
                            </div>
                            <div class="card-body ">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="me-2 text-body">Subtotal</h6><span
                                            class="text-end">{{ config('app.currency') }}
                                            {{ $checkoutCalculations['sub_total'] }}</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center border-top pt-3 mt-3">
                                        <h6 class="me-2">Grand Total</h6><span
                                            class="text-end text-dark">{{ config('app.currency') }}
                                            {{ $checkoutCalculations['order_total'] }}</span>
                                    </li>
                                </ul>


                                <div class="form-row mt-2" wire:ignore>

                                    <div class="form-group mt-2">
                                        <label for="card-element">Credit or Debit card (<small>Powered by
                                                Stripe</small>)</label>
                                        <div id="card-element" class="form-control"> </div>
                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                </div>

                                <div class="stripe-errors"></div>
                                <div class="d-grid gap-2 pt-25 mx-auto text-center ">
                                    <button id="card-button" type="submit" class="button-1 border-radious-0"
                                        data-secret="{{ $clientSecret }}">Pay</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>


            </div>

        </div>
    </section>
    <!-- End Add to Cart Area -->

</div>

@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>


    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '66px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        var card = elements.create('card', {
            hidePostalCode: true,
            // style: style
        });
        card.mount('#card-element');
        console.log(document.getElementById('card-element'));
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        cardButton.addEventListener('click', async (e) => {

            // disable button
            cardButton.disabled = true;
            // change button text
            cardButton.textContent = 'Processing...';

            console.log("attempting");
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: card,

                    }
                }
            );
            if (error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
                // enable button
                cardButton.disabled = false;
                // change button text
                cardButton.textContent = 'Submit';
            } else {
                paymentMethodHandler(setupIntent.payment_method);
            }
        });

        function paymentMethodHandler(payment_method) {
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'payment_method');
            hiddenInput.setAttribute('value', payment_method);
            form.appendChild(hiddenInput);
            form.submit();
        }
    </script>
@endpush
