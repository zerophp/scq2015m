Select * from city where idcity=1;

Select  * from city,user where idcity=city_idcity && email='agustincl4@gmail.com';
/*
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="users";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();




$query = "Select * from city where idcity=1";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($field1, $field2);
    while ($stmt->fetch()) {
        //printf("%s, %s\n", $field1, $field2);
    }
    $stmt->close();
}


*/

select * from user, city,gender where idcity=city_idcity && gender_idgender=idgender;


select * from user;



delete gender.* from gender,user where idgender=gender_idgender && user_iduser="id1";

select * from gender;


delete user.*  
	from user,gender,city
		where	iduser="id1" && 
				idgender=gender_idgender && 
				idcity=city_idcity
                ;


select * from user_has_transport;















