var harga = document.getElementById("harga").innerText; // Mendapatkan nilai harga dari elemen dengan id "harga"
var jumlahTiket = Math.floor(harga / 10000); // Menghitung jumlah tiket dengan membagi harga dengan 10000 dan membulatkannya ke bawah

document.getElementById("jumlahTiket").innerText = jumlahTiket; // Menampilkan hasil perhitungan pada elemen dengan id "jumlahTiket"
