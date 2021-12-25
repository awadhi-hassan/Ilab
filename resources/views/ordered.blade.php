<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h4><strong>Order Details</strong></h4>

                    <div class="flex">
                        <label for="name"><strong>Name :&nbsp;</strong></label>
                        {{ $user->name }}
                    </div>
                    <div class="flex">
                        <label for="email"><strong>Email Address :&nbsp;</strong></label>
                        {{ $user->email }}
                    </div>
                    <div class="flex">
                        <label for="plan"><strong>Plan :&nbsp;</strong></label>
                        {{ ucwords($request->plan) }}
                    </div>
                    <div class="flex">
                        <label for="bandwith"><strong>Bandwidth Speed :&nbsp;</strong></label>
                        {{ ucwords($request->bandwidth) }}
                    </div>
                    <div class="flex">
                        <label for="bandwith"><strong>Transmitter :&nbsp;</strong></label>
                        {{ ucwords($request->transmitter) }}
                    </div>
                    <div class="flex">
                        <label for="bandwith"><strong>Router :&nbsp;</strong></label>
                        {{ ucwords($request->router) }}
                    </div>

                    <div class="flex">
                        <label for="price"><strong>Total Cost:</strong> Ksh.4500</label>
                    </div>

                    <div class="my-4">
                        <button class="btn btn-primary">Continue to Payment</button>
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>
