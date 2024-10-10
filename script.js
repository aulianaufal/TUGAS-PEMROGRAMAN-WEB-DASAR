//Fungsi untuk menampilkan promo hari ini menggunakan percabangan if
function tampilkanPromo(){
    let hari = new Date().getDay();
    let promo = "";

    if(hari ===0 || hari ===6){
        promo = "Diskon 25% untuk semua level pedas!.";
    } else{
        promo = "Beli 3 gratis 1 untuk Seblak Level 5.";
    }

    document.getElementById("promoMessage").innerHTML = promo;
}

//Daftar menu seblak favorit beserta harga dan status diskon
let menuFavorit = [
    {nama: "Seblak Kerupuk", harga: 15000, diskon: true}, //diskon 25%
    {nama: "Seblak Ceker", harga: 18000, diskon: false},
    {nama: "Seblak Kikil", harga: 20000, diskon: false},
    {nama: "Seblak Bakso", harga: 17000, diskon: true}, //diskon 25%
];

let totalHargaSetelahDiskon = 0; //variabel global untuk menyimpan total harga

//Fungsi untuk menampilkan menu favorit dalam list dropdown
function tampilkanMenu(){
    let listMenu = document.getElementById("listMenu");
    let pilihMenu = document.getElementById("pilihMenu");
}

//Menghapus List dan Dropdown Menu

listMenu.innerHTML='';
pilihMenu.innerHTML='';

//Menampilkan Menu ke Dalam List dan Dropdown
menuFavorit.forEach(function(item, index){

//Menambahkan ke List
let li = document.createElement("li");
li.textContent = `${item.nama} - Rp ${item.harga}`;
listMenu.appendChild(li);

//Menambahkan Dropdown Pilihan Menu
let option = document.createElement("option");
option.value = index; //Menyimpan index sebagai value
option.textContent = item.nama;
pilihMenu.appendChild(option);
});

//Fungsi untuk memeriksa jumlah pesanan dan menghitung total bayar
function cekPesanan(){
    let menuIndex = document.getElementById("pilihMenu").value;
    let jumlah = document.getElementById("inputJumlah").value;
    let hasil = '';
    let total = 0

    //Validasi jumlah pesanan
    if (jumlah > 20){
        hasil = "Pesanan terlalu banyak! Maksimal 20 porsi.";
    } else if (jumlah >= 1&& jumlah <= 20){
        let menuPilihan = menuFavorit(menuIndex);
        let hargaPerItem = menuPilihan.harga;

        //Cek apakah menu memiliki diskon
        if (menuPilihan.diskon){
            hargaPerItem *= 0.75; //Diskon 25%
        }

        total = hargaPerItem * jumlah;
        totalHargaSetelahDiskon = total; //Simpan total harga untuk perhitungan kembalian
        hasil = `Pesanan Anda sebanyak ${jumlah} porsi ${menuPilihan.nama} telah diterima.`;
        document.getElementById("totalBayar").innerHTML = `Total yang harus dibayar: Rp ${total}`;
    } else{
        hasil = "Silahkan masukkan jumlah pesanan yang valid.";
        document.getElementById("totalBayar").innerHTML = '';
    }

    document.getElementById("hasilPesanan").innerHTML = hasil;
}

//Fungsi untuk menghitung kembalian
function hitungKembalian(){
    let uangBayar = document.getElementById("uangBayar").value;
    let kembalian = uangBayar - totalHargaSetelahDiskon;

    if (kembalian < 10000){
        document.getElementById("hasilKembalian").innerHTML = "Uang Anda Kurang.";
    } else{
        document.getElementById("hasilKembalian").innerHTML = `Kembalian Anda: Rp $(kembalian)`;
    }
}