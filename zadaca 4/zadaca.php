<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form method="GET" action="izrada.php">
        <input type="text" name="cijena" placeholder="unesite cijenu proizvoda" >
        <select name="proizvod" >
            <option>Hrana</option>
            <option >Oprema za racunare</option>
        </select>
        <input type="checkbox" name="izracunajPorez" >
        <span> (10% poreza)</span>
        <button>Izracunaj cijenu</button>


    </form>
    
</body>
</html>