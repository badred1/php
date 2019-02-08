<?php
    
    $conn=mysqli_connect('localhost','root','Azerty123','grh','3333') or die ('Cannot connect to db');

    function addEmployee($nom, $prenom, $sexe, $adresse,$date,$typeService) {
        $conn=mysqli_connect('localhost','root','Azerty123','grh','3333') or die ('Cannot connect to db');
        $query = mysqli_prepare($conn,"INSERT INTO employes(nom, prenom,sexe,adresse,dateNaissance,numServ) VALUES (?,?,?,?,?,?)");
        mysqli_stmt_bind_param($query,"sssssi",$nom, $prenom, $sexe, $adresse,$date,$typeService);
        mysqli_stmt_execute($query);
        mysqli_stmt_close($stmt);
        mysqli_close($link);

    }

    function allEmployes() {
        $conn=mysqli_connect('localhost','root','Azerty123','grh','3333');
        $query ="SELECT * FROM employes";
        $EmployeList=array();
        if ($result = mysqli_query($conn, $query)) {
            $i=0;
            /* Récupère un tableau associatif */
            while ($row = mysqli_fetch_assoc($result)) {
                $EmployeList[$i]=$row;
                $i++;
            }
        
            /* Libération des résultats */
            mysqli_free_result($result);
        }
        return $EmployeList;

        mysqli_close($conn);
    }   

    function delEmpl($code) {

        $conn=mysqli_connect('localhost','root','Azerty123','grh','3333');

        $query='DELETE FROM employes WHERE code= ' .$code. ';';

        mysqli_query($conn,$query);
        mysqli_close($conn);
        
        header('location:allEmpls.php');
    }