<div>
  <h1 class="justify-content-center mx-auto text-center">Report</h1>
    <section data-bs-version="5.1" class="content7 cid-uw1rfxI5QS" id="content7-13">
        <div class="container">
            <div class="row justify-content-center">
                <div class="">
                    <blockquote style="border-color: #39b451; background-color: #EBECEE; height: 170px;">
                        <div class="row">
                            <div class="col-2" >
                                <label for="order_no">Order No:</label><br>
                                <span id="order_no"></span>
                            </div>
                            <div class="col-2">
                                <label for="delivery_method">Delivery Method:</label><br>
                                <span id="delivery_method"></span>
                            </div>
                            <div class="col-2" >
                                <label for="">Delivery Date</label><br>
                                <form wire:submit="setDeliveryDate" >
                                    <input style="width: 153px;" type="date" wire:model="delivery_date" value="{{ $delivery_date }}" >
                                    <button type="submit">Show</button>
                                </form>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <section >
        <div class="container" >
            <table id="table" class="table table-bordered" >
                <thead>
                <tr  id="table_header">
                    <th class="text-nowrap">#</th>
                    <th class="text-nowrap">Order No</th>
                    <th class="text-nowrap">Delivery Method</th>
                    <th class="text-center"><span id="quantity_sum"></span><br><span id="header_border">Orders Qty</span></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $item)
                    <tr id="table1rows">
                        <td class="text-nowrap">{{ $loop->iteration }}</td>
                        <td style="font-size: 16px">{{ $item->order_no }}</td>
                        <td>{{ $item->delivery_method }}</td>
                        <td  class="text-center">{{ $item->quantity }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </section>
    <div x-data="initFilters()"></div>
    @script
    <script>
        Alpine.data('initFilters',() => ({
            init() {
                let tf_config = {
                    sort: true,
                    alternate_rows: false,
                    status: false,
                    sort_config: {
                        sort_types:['Number','String','Number','Number','Number','Number','Number','String']
                    },
                    display_all_text: "< Show All >",
                    col_0: 'input',
                    col_1: 'input',
                    col_2: 'select',
                    col_3: 'select',
                    col_4: 'select',
                    col_5: 'select',
                    col_8: 'select',
                    col_9: 'select',
                    col_10: 'select',
                    col_11: 'select',

                    external_flt_grid: true,
                    external_flt_grid_ids: [null,'order_no','delivery_method'],

                };
                setFilterGrid("table",tf_config);

            }}));
    </script>
    @endscript

</div>
