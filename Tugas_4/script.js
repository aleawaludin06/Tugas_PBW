function cekNilai(){

    let NIM = document.getElementById("NIM").value;
    let Nilai = document.getElementById("Nilai").value;

    let huruf = " ";

    if(Nilai >= 85){
        huruf = "A";
    }
    else if(Nilai >= 70){
        huruf = "B";
    }
    else if(Nilai >= 60){
        huruf = "C";
    }
    else if(Nilai >= 50){
        huruf = "D";
    }
    else{
        huruf = "E";
    }

    document.getElementById("hasil").innerHTML = "NIM: " + NIM + "<br>Nilai Huruf Anda adalah: " + huruf;
}