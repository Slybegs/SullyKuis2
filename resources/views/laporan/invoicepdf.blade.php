<hr>
<p>{{ $informasiPerusahaan[0]->namaPerusahaan }}</p>
<p>{{ $informasiPerusahaan[0]->alamatPerusahaan }}</p>
<p>{{ $informasiPerusahaan[0]->kotaPerusahaan }}</p>
<p>{{ $informasiPerusahaan[0]->provinsiPerusahaan }}</p>
<p>{{ $informasiPerusahaan[0]->negaraPerusahaan }}</p>
<hr>
<br>
<br>
<div style="text-align:right">
    <p>{{ $informasiPelanggan[0]->namaPelanggan }}</p>
    <p>{{ $informasiPelanggan[0]->alamatPelanggan }}</p>
    <p>{{ $informasiPelanggan[0]->kotaPelanggan }}</p>
    <p>{{ $informasiPelanggan[0]->provinsiPelanggan }}</p>
    <p>{{ $informasiPelanggan[0]->negaraPelanggan }}</p>
</div>
<br>
<h1>Invoice {{ $invoiceProduk[0]->nomorInvoice }}</h1>
<div class="col-md-6">
    <table>
        <thead>
            <tr style="font-weight: bold">
                <td>Invoice Date :</td>
                <td>Invoice Date :</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $invoiceProduk[0]->invoiceDate }}</td>
                <td>{{ $invoiceProduk[0]->dueDate }}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="d-flex justify-content-center">
    <table style="width:70%; margin-bottom:24px">
        <tr>
            <th>Description</th><th>Quantity</th><th>Unit Price</th><th>Taxes</th><th>Amount</th>
        </tr>
        <tr>
            @foreach($daftarProduk as $item)
                <tr>
                    <td>{{ $item->description }}</td><td>{{ $item->quantity }}</td><td>{{ $item->unitPrice }}</td><td>{{ $item->taxes }}</td><td>{{ $item->amount }}</td>
                </tr>
            @endforeach
        </tr>
    </table>
</div>