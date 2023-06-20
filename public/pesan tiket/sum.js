function sum() {
    var jumlah_tiket = document.getElementById('jml_tiket').value;
    var harga = jumlah_tiket * 10000;
    if (!isNaN(harga)) {
        document.getElementById('harga').value = harga;
    }
}
