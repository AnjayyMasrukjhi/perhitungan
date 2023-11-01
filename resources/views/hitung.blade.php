<!DOCTYPE html>
<html>
<head>
    <title>Form Kalkulator</title>
</head>
<body>

    @if(isset($result)){
        <p>Hasil: {{$result}}</p>
    }
    @endif
    <form  method="POST">
        <fieldset>
        <legend>Hitung</legend>
        <p>
            <label>variabel 1:</label>
            <input type="text" name="bilangan1" id="bilangan1" placeholder="masukkan nilai 1..." />
        </p>
        <p>
            <label>Variabel 2:</label>
            <input type="text" name="bilangan2" id="bilangan2" placeholder="masukkan nilai 2..." />
        </p>
        <p>

<input type="radio" id="Tambah" name="fav_language" value="tambah">
<label for="html">Tambah</label><br>
<input type="radio" id="Kurang" name="fav_language" value="kurang">
<label for="css">Kurang</label><br>
<input type="radio" id="Pembagian" name="fav_language" value="pembagian">
<label for="javascript">Pembagian</label>
        </p>
        <h1>hasil Perhitungan = <span id="hasil"></span></h1>
        </fieldset>
    </form>
    <script>
        function hitung(q){
            console.log(q)
            var Bilangan1,Bilangan2,hitung=0;
            Bilangan1= document.getElementById("bilangan1").value;
            Bilangan2= document.getElementById("bilangan2").value;

            if(q.target.defaultValue=="tambah")
                hitung = parseInt(Bilangan1) + parseInt(Bilangan2);
            else if(q.target.defaultValue=="kurang")
                hitung = parseInt(Bilangan1) - parseInt(Bilangan2);
            else if(q.target.defaultValue=="pembagian" && parseInt(Bilangan2) != 0)
                hitung = parseInt(Bilangan1) / parseInt(Bilangan2);
            document.getElementById("hasil").innerHTML=hitung;
            
        }
        let optionSelected = document.querySelectorAll('input[type=radio][name="fav_language"]');
        optionSelected.forEach(el => {
            el.addEventListener("change", hitung);
        });
    </script>
</body>
</html>