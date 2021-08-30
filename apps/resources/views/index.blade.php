@extends('layout')
<script>

function financial() {
    // Proteksi Jiwa
  var kpr = parseInt(document.getElementById('kpr').value);
  var kpm = parseInt(document.getElementById('kpm').value);
  var kredit = parseInt(document.getElementById('kredit').value);
  var bisnis = parseInt(document.getElementById('bisnis').value);
  var lainnya = parseInt(document.getElementById('lainnya').value);
  var kewajiban = parseInt(document.getElementById('kewajiban').value);
  document.getElementById('kewajiban').value = kpr + kpm + kredit + bisnis + lainnya;

  var penghasilan = parseInt(document.getElementById('penghasilan').value);
  document.getElementById('ideal').value = (penghasilan*100/6) + parseInt(document.getElementById('kewajiban').value);

  var pengeluaran = parseInt(document.getElementById('pengeluaran').value);
  document.getElementById('minimal').value = ((pengeluaran*12)/6*100)+ parseInt(document.getElementById('kewajiban').value);

//   Dana Pendidikan
    var usia = parseInt(document.getElementById('usia').value);
    var waktu = parseInt(document.getElementById('waktu').value);

    document.getElementById('waktu').value = 18- usia;
    var nantinya = parseInt(document.getElementById('saatini').value) *(1 + (10/100)) ** parseInt(document.getElementById('waktu').value);
    document.getElementById('nantinya').value = parseInt(nantinya).toFixed(0);
    // document.getElementById('disconto').value = 1/(1+((10/100)/12));
    var tabunganpendidikan = ((parseInt(document.getElementById('saatini').value) * ((10/100)/12))/(1-((1+((10/100)/12))**((0-1)* parseInt(document.getElementById('waktu').value)* 12))));
    document.getElementById('tabunganpendidikan').value = parseInt(tabunganpendidikan).toFixed(0);
//  Dana Pensiun

    var pensiun = parseInt(document.getElementById('pensiun').value);
    document.getElementById('jumlahideal').value = (pensiun*12)/(6/100);

    document.getElementById('jumlahdicapai').value = document.getElementById('jumlahideal').value;
    var usiasekarang = parseInt(document.getElementById('usiasekarang').value);
    var usiapensiun = parseInt(document.getElementById('usiapensiun').value);
    document.getElementById('waktusimpanan').value = usiapensiun - usiasekarang;

    var tabunganpensiun = ((parseInt(document.getElementById('jumlahdicapai').value) * ((20/100)/12))/(1-((1+((20/100)/12))**((0-1)* parseInt(document.getElementById('waktusimpanan').value)* 12))));
    document.getElementById('tabunganpensiun').value = parseInt(tabunganpensiun).toFixed(0);
    
}
</script>
@section('title')
    <title>INDEX</title>
@endsection

@section('main-content')
<div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body ">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">PERHITUNGAN PROTEKSI JIWA</h1>
                    </div>
                    <form class="user">
                        <div class="form-group">
                            <td> Sisa Saldo KPR<input type="text" onchange="financial()" name="kpr" class="form-control form-control-user @error('kpr') is-invalid @enderror" id ="kpr" value = "0" ></td>
                        </div>
                        <div class="form-group">
                            <td>Sisa Saldo KPM</td>
                            <td> :</td>
                            <td><input type="text" name="kpm" onchange="financial()" class="form-control form-control-user @error('kpm') is-invalid @enderror" id ="kpm" value ="0"></td>
                        </div>
                        <div class="form-group">
                            <td>Sisa Saldo Kartu Kredit</td>
                            <td> :</td>
                            <td><input type="text" name="kredit" onchange="financial()" class="form-control form-control-user @error('kredit') is-invalid @enderror" id="kredit" value ="0"></td>
                        </div>
                        <div class="form-group">
                            <td>Sisa Saldo Kredit Bisnis</td>
                            <td> :</td>
                            <td><input type="text" name="bisnis" onchange="financial()" class="form-control form-control-user @error('bisnis') is-invalid @enderror" id="bisnis"value ="500000000"></td>
                        </div>
                        <div class="form-group">
                            <td>Sisa Saldo Kredit Lainnya</td>
                            <td> :</td>
                            <td><input type="text" name="lainnya" onchange="financial()" class="form-control form-control-user @error('lainnya') is-invalid @enderror" id="lainnya" value ="0" ></td>
                        </div>
                        <div class="form-group">
                            <td>Total Kewajiban</td>
                            <td> :</td>
                            <td><input type="text" name="kewajiban" id="kewajiban" class="form-control" Readonly value="500000000"  ></td>
                        </div>
                        <div class="form-group">
                            <td>PENGHASILAN / TAHUN</td>
                            <td> :</td>
                            <td><input type="text" name="penghasilan" onchange="financial()" class="form-control form-control-user @error('penghasilan') is-invalid @enderror" id="penghasilan" value="240000000"></td>
                        </div>
                        <div class="form-group">
                            <td>PENGELUARAN / BULAN</td>
                            <td> :</td>
                            <td><input type="text" name="pengeluaran" onchange="financial()" class="form-control form-control-user @error('pengeluaran') is-invalid @enderror" id="pengeluaran" value ="15000000" ></td>
                        </div>
                        <div class="form-group">
                            <td>ASUMSI BUNGA INVESTASI</td>
                            <td> :</td>
                            <td><input type="text" name="bunga" class="form-control form-control-user @error('bunga') is-invalid @enderror" id="bunga" value ="6%" Readonly></td>
                        </div>
                        <div class="form-group">
                            <td>UP IDEAL</td>
                            <td> :</td>
                            <td><input type="text" name="ideal" id="ideal" class="form-control" Readonly value="4500000000"></td>
                        </div>
                        <div class="form-group">
                            <td>UP MINIMAL</td>
                            <td> :</td>
                            <td><input type="text" name="minimal" id="minimal" class="form-control" Readonly value="3500000000"></div></td>
                        </div>
                    </form>
                <div class="col-lg-2">
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">PERHITUNGAN DANA PENDIDKAN</h1>
                    </div>
                    <form class="user">
                        <div class="form-group">
                            <td> Usia Anak </td>
                            <td> :</td>
                            <td><input type="text" onchange="financial()" name="usia" class="form-control " id ="usia" value = "0" ></td>
                        </div>
                        <div class="form-group">
                            <td>Jangka Waktu Simpanan</td>
                            <td> :</td>
                            <td><input type="text" name="waktu" class="form-control " id ="waktu" value ="18" Readonly></td>
                        </div>
                        <div class="form-group">
                            <td>Biaya Pendidikan Saat Ini</td>
                            <td> :</td>
                            <td><input type="text" onchange="financial()" name="saatini" class="form-control " id="saatini" value ="50000000"></td>
                        </div>
                        <div class="form-group">
                            <td>Inflasi Pendidikan</td>
                            <td> :</td>
                            <td><input type="text" name="inflasi" class="form-control " id="inflasi"value ="10%" Readonly></td>
                        </div>
                        <div class="form-group">
                            <td>Biaya Pendidikan Nantinya</td>
                            <td> :</td>
                            <td><input type="text" name="nantinya"  class="form-control " id="nantinya" value ="277995865" Readonly></td>
                        </div>
                        <div class="form-group">
                            <td>Asumsi Bunga Investasi</td>
                            <td> :</td>
                            <td><input type="text" name="bungapendidikan" id="bungapendidikan" class="form-control" Readonly value="10%"  ></td>
                        </div>
                        <!-- <div class="form-group">
                            <td>Tingkat Diskonto </td>
                            <td> :</td>
                            <td><input type="text" name="diskonto" class="form-control " id="diskonto" value="0" Readonly></td>
                        </div> -->
                        <div class="form-group">
                            <td>Tabungan Regular Bulanan </td>
                            <td> :</td>
                            <td><input type="text" name="tabunganpendidikan" class="form-control " id="tabunganpendidikan" value="499921" Readonly></td>
                        </div>
                    </form>
                </div>
            </div>
            <div><br><br><hr><br><br></div>
            <div class="col-lg-4"></div>
                <div class="col-lg-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">PERHITUNGAN DANA PENSIUN</h1>
                    </div>
                    <form class="user">
                        <div class="form-group">
                            <td> Dana Pensiun per Bulan</td>
                            <td> :</td>
                            <td><input type="text" onchange="financial()" name="pensiun" class="form-control " id ="pensiun" value = "0" ></td>
                        </div>
                        <div class="form-group">
                            <td>Tingkat Bunga</td>
                            <td> :</td>
                            <td><input type="text" name="tingkatbunga" class="form-control " id ="tingkatbunga" value ="6%" Readonly></td>
                        </div>
                        <div class="form-group">
                            <td>Jumlah Ideal</td>
                            <td> :</td>
                            <td><input type="text" onchange="financial()" name="jumlahideal" class="form-control " id="jumlahideal" value ="0" Readonly></td>
                        </div>
                        <div class="form-group">
                            <td>Jumlah Yang Ingin Dicapai</td>
                            <td> :</td>
                            <td><input type="text" onchange="financial()" name="jumlahdicapai" class="form-control " id="jumlahdicapai" value ="0" Readonly></td>
                        </div>
                        <div class="form-group">
                            <td>Asumsi Bunga Investasi</td>
                            <td> :</td>
                            <td><input type="text" name="bungapensiun"  class="form-control " id="bungapensiun" value ="20%" Readonly></td>
                        </div>
                        <div class="form-group">
                            <td>Usia Sekarang</td>
                            <td> :</td>
                            <td><input type="text" onchange="financial()" name="usiasekarang" id="usiasekarang" class="form-control"  value="0"  ></td>
                        </div>
                        <div class="form-group">
                            <td>Usia Pensiun </td>
                            <td> :</td>
                            <td><input type="text" onchange="financial()" name="usiapensiun" class="form-control " id="usiapensiun" value="55" ></td>
                        </div>
                        <div class="form-group">
                            <td>Jangka Waktu Simpanan</td>
                            <td> :</td>
                            <td><input type="text" name="waktusimpanan" class="form-control " id="waktusimpanan" value="55" Readonly></td>
                        </div>
                        <div class="form-group">
                            <td>Tabungan Regular Bulanan </td>
                            <td> :</td>
                            <td><input type="text" name="tabunganpensiun" class="form-control " id="tabunganpensiun" value="0" Readonly></td>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection