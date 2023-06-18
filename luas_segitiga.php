<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga</title>
</head>
<body>

    <h1>Menghitung Luas Segitiga</h1>

    <label for=""> Alas Segitiga : </label> <br> 
    <input type="number" id="alas"> <br>
    <label for=""> Tinggi Segitiga : </label> <br>
    <input type="number" id="tinggi"> <br> <br>

    <button id="hitung"> Hitung </button> 
    <div id="hasil"></div>

    <script>
        const alas = document.getElementById('alas')
        const tinggi = document.getElementById('tinggi')
        const hitung = document.getElementById('hitung')
        const hasil = document.getElementById('hasil')
        hitung.addEventListener('click', function(){
            let a = alas.value
            let t = tinggi.value
            let l = 0.5*a*t
            hasil.innerHTML = `Luas segitiga dari alas ${a} cm dan tinggi ${t} cm adalah ${l} cm<sup>2<sup>`
        })
    </script>

</body>
</html>