<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11.7 Практика</title>
    <style>
        .container {
            margin: 20px 200px
        }
        .title {
            font-weight: 700;
            font-size: 25px;
            text-align: left;
            margin-bottom: 10px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #c8c8c8;
            margin: 20px 0;
            padding: 10px;
            height: 50px;
        }
        thead {
            background-color: #eee;
            font-size: 25px;
        }
        td {
            text-align: center;
            font-weight: 600;
            font-size: 20px;
        }
        p {
            font-size: 20px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <caption class="title">Задание 1. Таблица истинности PHP</caption>
            <thead>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </thead>
            <tbody>
                <tr>
                    <?php 
                        $a = 0;
                        $b = 0;
                        echo "<td>$a</td>";
                        echo "<td>$b</td>";
                        echo "<td>" . !$a . "</td>";
                        echo "<td>" . (int)($a || $b) . "</td>";
                        echo "<td>" . (int)($a && $b) . "</td>";
                        echo "<td>" . (int)($a xor $b) . "</td>";
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = 0;
                        $b = 1;
                        echo "<td>$a</td>";
                        echo "<td>$b</td>";
                        echo "<td>" . !$a . "</td>";
                        echo "<td>" . (int)($a || $b) . "</td>";
                        echo "<td>" . (int)($a && $b) . "</td>";
                        echo "<td>" . (int)($a xor $b) . "</td>";
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = 1;
                        $b = 0;
                        echo "<td>$a</td>";
                        echo "<td>$b</td>";
                        echo "<td>" . (int)!$a . "</td>";
                        echo "<td>" . (int)($a || $b) . "</td>";
                        echo "<td>" . (int)($a && $b) . "</td>";
                        echo "<td>" . (int)($a xor $b) . "</td>";
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = 1;
                        $b = 1;
                        echo "<td>$a</td>";
                        echo "<td>$b</td>";
                        echo "<td>" . (int)!$a . "</td>";
                        echo "<td>" . (int)($a || $b) . "</td>";
                        echo "<td>" . (int)($a && $b) . "</td>";
                        echo "<td>" . (int)($a xor $b) . "</td>";
                    ?>
                </tr>
            </tbody>
        </table>
        <table>
            <caption class="title">Задание 2. Гибкое сравнение в PHP</caption>
            <thead>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </thead>
            <tbody>
                <tr>
                    <?php 
                        $a = true;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        $a_tmp = $a ? 'true' : 'false';
                        echo "<td>$a_tmp</td>";
                        foreach ($b as $item) {
                            $res = ($a == $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = false;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        $a_tmp = $a ? 'true' : 'false';
                        echo "<td>$a_tmp</td>";
                        foreach ($b as $item) {
                            $res = ($a == $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = 1;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        echo "<td>$a</td>";
                        foreach ($b as $item) {
                            $res = ($a == $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = 0;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        echo "<td>$a</td>";
                        foreach ($b as $item) {
                            $res = ($a == $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = -1;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        echo "<td>$a</td>";
                        foreach ($b as $item) {
                            $res = ($a == $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = "1";
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        echo "<td>\"$a\"</td>";
                        foreach ($b as $item) {
                            $res = ($a == $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = null;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        $a_tmp = isset($a) ? $a : 'null';
                        echo "<td>$a_tmp</td>";
                        foreach ($b as $item) {
                            $res = ($a == $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = "php";
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        echo "<td>\"$a\"</td>";
                        foreach ($b as $item) {
                            $res = ($a == $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
            </tbody>
        </table>

        <table>
        <caption class="title">Задание 2. Жёсткое сравнение в PHP</caption>
            <thead>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </thead>
            <tbody>
                <tr>
                    <?php 
                        $a = true;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        $a_tmp = $a ? 'true' : 'false';
                        echo "<td>$a_tmp</td>";
                        foreach ($b as $item) {
                            $res = ($a === $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = false;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        $a_tmp = $a ? 'true' : 'false';
                        echo "<td>$a_tmp</td>";
                        foreach ($b as $item) {
                            $res = null;
                            $res = ($a === $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = 1;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        echo "<td>$a</td>";
                        foreach ($b as $item) {
                            $res = ($a === $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = 0;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        echo "<td>$a</td>";
                        foreach ($b as $item) {
                            $res = ($a === $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = -1;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        echo "<td>$a</td>";
                        foreach ($b as $item) {
                            $res = ($a === $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = "1";
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        echo "<td>\"$a\"</td>";
                        foreach ($b as $item) {
                            $res = ($a === $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = null;
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        $a_tmp = isset($a) ? $a : 'null';
                        echo "<td>$a_tmp</td>";
                        foreach ($b as $item) {
                            $res = ($a === $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
                <tr>
                    <?php 
                        $a = "php";
                        $b = [true, false, 1, 0, -1, "1", null, "php"];
                        echo "<td>\"$a\"</td>";
                        foreach ($b as $item) {
                            $res = ($a === $item) ? 'true' : 'false';
                            echo "<td>$res</td>";
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        <h2>Вывод о сравнении</h2>
        <p>При гибком сравнении если типы сравниваемых переменных разные, сначала происходит преобразование типов, а затем осуществляется сравнение.</p>
        <p>При жёстком сравнении преобразование типов не происходит. Две переменные будут тождественно равны только тогда, когда они одного типа и имеет одинаковые значения.</p>
    </div>
</body>
</html>
