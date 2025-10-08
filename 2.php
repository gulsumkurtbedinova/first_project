
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Случайные картинки</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>цветы</h1>
    <table>
        <tr>
            <th>цветок</th>
            <th>цена</th>
        </tr>
        <th>
        <?php
        // ассоциативный массив продуктов и их цен
        $flower["gladiolus"] = 100;
        $flower["ranunculus"] = 90;
        $flower["violet"] = 60;
        $flower["rose"] = 130;
        $flower["begonia"]= 230;
        $flower["iris"] = 200;
        $flower["lavender"] = 90;
        $flower["lily"] = 150;
        $flower["marigold"] = 130;
        $flower["peony"] = 140;
        $flower["petunia"] = 50;
        $flower["tulip"] = 230;
        $flower["daffodil"] = 80;
        $flower["wisteria"] = 60;
        $flower["orchid"] = 100;
         
        foreach ( $flower as $key => $value) {
            echo "<tr>";
            echo "<td>", "Цветок ".$key."</td>";
            echo "<td>".$value."рублей", "</td>", "<br />";
           
           echo "</tr>";
        }
        ?>
    </th></tr>
        <asda> 123  </asda>
        </table>
</body>
</html>
        


