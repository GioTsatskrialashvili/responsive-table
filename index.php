<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body ><table>
    <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Country</th>
        <th>Skills</th>
        <th>Available for position</th>
    </tr>
    <?php

$data = [
    [
        "id" => 1,
        "name" => "Giorgi",
        "lastname" => "Amashukeli",
        "country"  => "Georgia",
        "skills" => ["html", "css", "js"],
        "available" => true
    ],
    [
        "id" => 2,
        "name" => "Mariam",
        "lastname" => "Abashidze",
        "country"  => "Georgia",
        "skills" => ["html"],
        "available" => true
    ],
    [
        "id" => 3,
        "name" => "Andria",
        "lastname" => "Beridze",
        "country"  => "USA",
        "skills" => [],
        "available" => false
    ],
    [
        "id" => 4,
        "name" => "Nino",
        "lastname" => "Nozadze",
        "country"  => "Germany",
        "skills" => ["Js", "css"],
        "available" => false
    ]
];
foreach($data as $key => $value){?>
<tr>
    <td> <?php echo $value['name']?></td>
    <td> <?php echo $value['lastname']?></td>
    <td> <?php echo $value['country']?></td>
    <td> <ul>
    <?php foreach($value['skills'] as $key=>$value1){?>
       <li> <?php  echo $value1?></li>
       <?php 
    }
        
    
        ?>
</ul></td>
<td class="available"> <?php  if($value['available']==1){
    echo"<font color='blue'>"."available";}
    else{
        
        echo "<font color='red'>"."no available";}?></td>
</tr>
<?php
}


?>




</table>



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
        *{font-family:'Roboto', sans-serif;}
        
        table{
            
            margin: 0 auto;}

        table, td, th {
        border: 0.1px solid #bdc3c7 ;
}th{
    background-color:#27ae60;
    padding:10px 200px 10px 7px;
    color:#ecf0f1;
    font-weight:large;
}td{ 
    padding-left:7px;
}
      table {
  border-collapse: collapse;
}
    </style>

</body>
</html>