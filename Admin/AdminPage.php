<?php
include 'configuration.php';
$sql='SELECT * FROM admin_details';
// $result = mysqli_query($conn,$sql);
// $result = mysqli_query($conn, $sql);
if(mysqli_num_rows(mysqli_query($conn,$sql))>0){
    $i=0;
    while($row=mysqli_fetch_assoc(mysqli_query($conn,$sql))){
        $students[$i]=$row;
        $i++;
    }
}
mysqli_close($conn);
?>
<?php include('MenuPart.php')?>
<h1 style="text-align:center;">Admin Page</h1>
<hr>
<table>
    <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Username</th>
        <td><?=$student['full_name']?></td>
    </tr >
</table>
<?php include('FooterPart.php')?>
