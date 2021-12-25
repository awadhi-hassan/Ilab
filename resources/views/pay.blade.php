<x-app-layout>
    <section class="order-header">
        <h1>Confirm and pay</h1>
    </section>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h4 style="text-align: center;"><strong>Oder Details</strong></h4>
                        <form action="">
                            @csrf
                            <div class="form-group mt-1">
                                <label for="name"><strong>Name:</strong></label><br>
                                {{ __(Auth::user()->name) }}
                            </div>
                            <div class="form-group mt-1">
                                <label for="email"><strong>Email:</strong></label><br>
                                {{ __(Auth::user()->email) }}
                            </div>
                            <div class="form-group mt-1">
                                <label for="idnumber"><strong>ID Number:</strong></label><br>
                                {{ __(Auth::user()->id_number) }}
                            </div>
                            <div class="form-group mt-1">
                                <label for="plan"><strong>Plan Chose</strong></label><br>
                                <div style="text-transform:capitalize">
                                    {{ $plan }}<br>
                                    {{ $package }}<br>
                                    {{ $variant }}
                                </div>
                            </div>
                            <div class="form-group mt-3 col-5">
                                <label for="account"><strong>Account Number</strong></label>
                                <input type="text" name="account" class="form-control" id="account" value="Ilab Networks" disabled>
                            </div>
                            <div class="form-group mt-3 col-5">
                                <label for="account"><strong>Phone Number</strong></label>
                                <input type="text" name="phone" class="form-control" id="phone" value=" {{ Auth::user()->phone_number}} ">
                            </div>
                            <div class="form-group mt-3 col-5">
                                <label for="amount"><strong>Amount</strong></label>
                                <input type="text" name="amount" class="form-control" id="amount">
                            </div>
                            <button id="stkpush" class="btn btn-primary">Pay</button>
                            <div id="stk_response"></div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</x-app-layout>
