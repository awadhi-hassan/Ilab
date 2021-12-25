<x-app-layout>
    <script>
        function populate_packages(s1, s2){
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);

            s2.innerHTML = "";

            if (s1.value == 'home') {
                var optionArray = ['|','family|Family','compact|Compact','compact-plus|Compact-Plus'];
            } else if (s1.value == 'business') {
                var optionArray = ['|','premier|Premier','executive|Executive','enterprise|Enterprise'];
            }

            for (var option in optionArray) {
                var pair = optionArray[option].split('|');
                var newOption = document.createElement('option');
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];

                s2.options.add(newOption);
            }

        }

        function populate_variant(v1, v2){
            var v1 = document.getElementById(v1);
            var v2 = document.getElementById(v2);

            v2.innerHTML = "";

            if (v1.value == 'family') {
                var optionArray = ['|', '2 MBPS Bandwidth Free Trial (7 Days) Unlimited Support @Ksh.2,000|2 MBPS Bandwidth Free Trial (7 Days) Unlimited Support @Ksh.2,000', '4 MBPS Bandwidth Free Trial (10 Days) Unlimited Support @Ksh.2,500|4 MBPS Bandwidth Free Trial (10 Days) Unlimited Support @Ksh.2,500'];
            } else if (v1.value == 'compact') {
                var optionArray = ['|','5 MBPS Bandwidth Free Trial (5 Days) Unlimited Support @Ksh.4,000|5 MBPS Bandwidth Free Trial (5 Days) Unlimited Support @Ksh.4,000', '6 MBPS Bandwidth Free Trial (7 Days) Unlimited Support @Ksh.5,000|6 MBPS Bandwidth Free Trial (7 Days) Unlimited Support @Ksh.5,000'];
            }else if (v1.value == 'compact-plus') {
                var optionArray = ['|','7 MBPS Bandwidth Free Trial (3 Days) Unlimited Support @Ksh.5,500|7 MBPS Bandwidth Free Trial (3 Days) Unlimited Support @Ksh.5,500', '10 MBPS Bandwidth Free Trial (5 Days) Unlimited Support @Ksh.7,000|10 MBPS Bandwidth Free Trial (5 Days) Unlimited Support @Ksh.7,000'];
            } else if (v1.value == 'premier') {
                var optionArray = ['|', '2 MBPS Bandwidth Free Trial (7 Days) Unlimited Support @Ksh.2,500|2 MBPS Bandwidth Free Trial (7 Days) Unlimited Support @Ksh.2,500', '4 MBPS Bandwidth Free Trial (10 Days) Unlimited Support @Ksh.4,500|4 MBPS Bandwidth Free Trial (10 Days) Unlimited Support @Ksh.4,500'];
            } else if (v1.value == 'executive') {
                var optionArray = ['|','5 MBPS Bandwidth Free Trial (5 Days) Unlimited Support @Ksh.5,500|5 MBPS Bandwidth Free Trial (5 Days) Unlimited Support @Ksh.5,500', '6 MBPS Bandwidth Free Trial (7 Days) Unlimited Support @Ksh.6,000|6 MBPS Bandwidth Free Trial (7 Days) Unlimited Support @Ksh.6,000'];
            }else if (v1.value == 'enterprise') {
                var optionArray = ['|','7 MBPS Bandwidth Free Trial (3 Days) Unlimited Support @Ksh.7,500|7 MBPS Bandwidth Free Trial (3 Days) Unlimited Support @Ksh.7,500', '10 MBPS Bandwidth Free Trial (5 Days) Unlimited Support @Ksh.9,000|10 MBPS Bandwidth Free Trial (5 Days) Unlimited Support @Ksh.9,000'];
            }
            for (var option in optionArray) {
                var pair = optionArray[option].split('|');
                var newOption = document.createElement('option');
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];

                v2.options.add(newOption);
            }

        }
    </script>
    <section class="order-header">
        <h1>Make your Order</h1>
    </section>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h4 style="text-align: center;"><strong>Make your Specification</strong></h4>
                    <form action="{{ route('pay') }}" name="wifi">
                        <div class="form-group mt-3">
                            <label for="plan"><strong>Choose your Plan</strong></label>
                            <select name="plan" id="plan" class="form-control" onchange="populate_packages(this.id, 'packages')">
                                <option value=""></option>
                                <option value="home">Home</option>
                                <option value="business">Business</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="packages"><strong>Package</strong></label>
                            <select name="packages" id="packages" class="form-control" onchange="populate_variant(this.id, 'variant')"></select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="variant"><strong>Variant</strong></label>
                            <select name="variant" id="variant" class="form-control"></select>
                        </div>

                        <button type="submit" class="btn btn-primary">Continue to Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
</x-app-layout>
