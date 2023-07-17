<?php

session_start();
include ('connect.php');

$votes=$_POST['candidatevotes'];
$totalvotes=$votes+1;

$gid=$_POST['candidateid'];
$uid=$_SESSION['id'];

$updatevotes=mysqli_query($conn,"update `userdata` set votes ='$totalvotes'
where id= '$gid'");

$updatestatus=mysqli_query($conn,"update `userdata` set status=1 where id =
'$uid'");

if($updatevotes and $updatestatus) {
    $getcandidates=mysqli_query($conn,"select username ,photo,votes, id from `userdata`
    where standard = 'candidate'");
    $candidates=mysqli_fetch_all($getcandidates,MYSQLI_ASSOC);
    $_SESSION['candidates']=$candidates;
    $_SESSION['status']=1;

    echo '<script>
    alert("Voting Successful");
    window.location="../partials/dashboard.php";
    </script>';

}else{
    echo '<script>
    alert("Technical error !! Vote after sometime");
    window.location="../partials/dashboard.php";
    </script>';
}


?>