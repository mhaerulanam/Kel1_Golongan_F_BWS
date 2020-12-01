<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'mahasiswa'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT nama, usernam, email, password, gender, agama, biografi 
		FROM mahasiswa';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
include "kon.php";

echo '<table>
        <style>
        table, th, td {
            border: 3px solid black;
            border-collapse: collapse;
          }</style>
		<thead>
            <tr>
            
				<th>NAMA</th>
				<th>USERNAME</th>
				<th>EMAIL</th>
                <th>PASSWORD</th>
                <tH>GENDER</th>
                <tH>AGAMA</th>
                <tH>BIOGRAFI</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['nama'].'</td>
			<td>'.$row['usernam'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['password'].'</td>
            <td>'.$row['gender'].'</td>
            <td>'.$row['agama'].'</td>
            <td>'.$row['biografi'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>
<a href="index.php">Back</a> 
';

mysqli_free_result($query);

mysqli_close($conn);
?>
