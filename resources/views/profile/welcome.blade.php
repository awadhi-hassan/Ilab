<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <h2 style="text-align: center"><strong>Place Reservation</strong></h2>

    <form action=" {{ route('order') }} ">
        <div class="d-flex">
            <div class="form-group col-3 d-flex align-items-center my-5">
                <label for="location"><strong>Location</strong></label>
                <select name="location" id="location" class="form-control ml-3">
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="location">location {{$i}}</option>
                    @endfor
                </select>
            </div>
        </div>

        <strong>Choose your plan</strong>
        <div class="flex col-4" style="justify-content: space-around">
            <div class="form-group flex align-items-center">
                <input type="radio" id="home" name="plan" value="home">
                <label for="home" class="ml-3">Home</label>
            </div>

            <div class="form-group flex align-items-center">
                <input type="radio" id="business" name="plan" value="business">
                <label for="business" class="ml-3">Business</label>
            </div>
        </div>

        <div class="my-3">
            <strong class="my-3">Choose Preferred Bandwidth Speed</strong>
            <div class="form-group">
                <div class="form-group flex align-items-center">
                    <input type="radio" id="2mbps" name="bandwidth" value="2mbps">
                    <label for="2mbps" class="ml-3">2MBps</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group flex align-items-center">
                    <input type="radio" id="5mbps" name="bandwidth" value="5mbps">
                    <label for="5mbps" class="ml-3">5MBps</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group flex align-items-center">
                    <input type="radio" id="10mbps" name="bandwidth" value="10mbps">
                    <label for="10mbps" class="ml-3">10MBps</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group flex align-items-center">
                    <input type="radio" id="15mbps" name="bandwidth" value="15mbps">
                    <label for="15mbps" class="ml-3">15MBps</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group flex align-items-center">
                    <input type="radio" id="25mbps" name="bandwidth" value="25mbps">
                    <label for="25mbps" class="ml-3">25MBps</label>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div><strong>Transmiter</strong></div>
            <div class="form-group col-4">
                <select class="form-control" name="transmitter" id="transmitter">
                    <option value="power">Powerbeam</option>
                    <option value="lite">Litebeam</option>
                    <option value="nano">Nanobeam</option>
                </select>
            </div>
        </div>

        <div class="my-3">
            <div><strong>Router</strong></div>
            <div class="form-group col-4">
                <select class="form-control" name="router" id="router">
                    <option value="netgear">Netgear</option>
                    <option value="tenda">Tenda</option>
                    <option value="tplink">TP Link</option>
                    <option value="linksys">Linksys</option>
                    <option value="huawei">Huawei</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Confirm Order</button>
    </form>
</div>
