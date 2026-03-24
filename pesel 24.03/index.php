<?php
$polaczenie=mysqli_connect("localhost", "root", "", "sklep")
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </header>
    <section>
        <h2>Nasze ceny</h2>
        <table>
            <?php
            $sql = "SELECT nazwa, cena FROM towary LIMIT 4";
            $zapytanie = mysqli_query($polaczenie, $sql);
            while($wynik = mysqli_fetch_assoc($zapytanie)) {
                echo "<tr>";
                echo "<th>".$wynik['nazwa']."</th>";
                echo "<td>".$wynik['cena']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </section>
    <main>
        <h2>Koszt zakupów</h2>
        <form method="post">
            <label for="lista">wybierz artykuł</label>
            <select name="art" id="art">
                <option>Zeszyt 60 kartek</option>
                <option>Zeszyt 32 kartek</option>
                <option>Cyrkiel</option>
                <option>Linijka 30cm</option>
            </select> <br>
            Liczba sztuk: <input type="number" name="sztuk" id="sztuk"> <br><br>
            <button type="submit">OBLICZ</button>
            <!-- SKRYPT2 -->
        </form>
    </main>
    <aside>
        <h2>Kontakt</h2>
        <img src="zakupy.png" alt="hurtownia">
        <p>email:
            <a href="hurt@poczta2.pl">hurt@poczta.pl</a>
        </p>
    </aside>
    <footer>
        <h4>Witrynę wykonał: 123456789</h4>
    </footer>
    <?php
    mysqli_close($polaczenie)
    ?>
</body>
</html>