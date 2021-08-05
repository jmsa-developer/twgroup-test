<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Challenge One') }}
        </h2>
    </x-slot>

            <div class="mt-10">
                <h3 class="text-center">
                    Obtener precio total de la factura
                </h3>
                <table class="table-fixed w-full">
                    <thead>

                    <tr  class="bg-gray-100">
                        <th>Invoice</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="border px-4 py-2 text-center"> {{ $product->invoice_id }}</td>
                            <td class="border px-4 py-2 text-center"> {{ $product->total }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="mt-10">
                <h3 class="text-center">
                    Obtener todos id de las facturas que tengan productos con cantidad mayor a 100.
                </h3>
                <table class="table-fixed w-full">
                    <thead>
                    <tr  class="bg-gray-100">
                        <th>Id</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($itemsId as $item)
                        <tr>
                            <td class="border px-4 py-2 text-center"> {{ $item->id }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
            <div class="mt-10">
                <h3 class="text-center">
                    Obtener todos los nombres de los productos cuyo valor final sea superior a $1.000.000 CLP.
                </h3>
                <table class="table-fixed w-full">
                    <thead>
                    <tr  class="bg-gray-100">
                        <th>Id</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($itemsNames as $item)
                        <tr>
                            <td class="border px-4 py-2 text-center"> {{ $item->id }}</td>
                            <td class="border px-4 py-2 text-center"> {{ $item->name }}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

</x-app-layout>
