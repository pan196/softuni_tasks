<!DOCTYPE html>
<html>
<head>
    <title>CV</title>
    <style>
        th, td{
            border: 1px solid black;
        }
        table{
            border: 1px solid black;
            /*border-collapse: collapse;*/
        }
    </style>
</head>
<body>
<h1>CV</h1>
<?php
//$compLangArr;
//$compLangLvlArr;
//
//$langArr;
//$langComLvlArr;
//$langReadLvlArr;
//$langWriteLvlArr;
//$driverLicenseArr;
$j = 0;
if(isset($_GET["fname"])){
    if (preg_match('/^[a-zA-Z ]+$/', $_GET["fname"]) && strlen($_GET["fname"]) < 21 && strlen($_GET["fname"]) > 1){
        $fname = $_GET["fname"];
    }
    else{
        $fname = "Incorrect First Name";
    }
}
if(isset($_GET["lname"])){
    if (preg_match('/^[a-zA-Z ]+$/', $_GET["lname"]) && strlen($_GET["lname"]) < 21 && strlen($_GET["lname"]) > 1){
        $lname = $_GET["lname"];
    }
    else{
        $lname = "Incorrect Last Name";
    }
}
if(isset($_GET["email"])){
    if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)){
        $mail = $_GET["email"];
    }
    else{
        $mail = "Incorrect Email Address";
    }
}
if(isset($_GET["number"])){
    if (preg_match('/^[0-9 +-]+$/', $_GET["number"])){
        $number = $_GET["number"];
    }
    else{
        $number = "Incorrect Phone Number";
    }
}
if(isset($_GET["sex"])){
    $isMale = $_GET["sex"];
}
if(isset($_GET["bday"])){
    $bday = $_GET["bday"];
}
if(isset($_GET["nationality"])){
    $nationality = $_GET["nationality"];
}

if(isset($_GET["company"])){
    if (preg_match('/^[a-zA-Z0-9]+$/', $_GET["company"]) && strlen($_GET["company"]) < 21 && strlen($_GET["company"]) > 1){
        $companyName = $_GET["company"];
    }
    else{
        $companyName = "Incorrect Company Name";
    }
}
if(isset($_GET["from"])){
    $from = $_GET["from"];
}
if(isset($_GET["to"])){
    $to = $_GET["to"];
}
?>

    <table style="margin-bottom: 30px;">
        <tr>
            <th colspan="2">Personal Information</th>
        </tr>
        <tr>
            <td>First Name</td>
            <td>
                <?php
                if (isset($_GET["fname"])){
                    echo $fname;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>
                <?php
                if (isset($_GET["lname"])){
                    echo $lname;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <?php
                if (isset($_GET["email"])){
                    echo $mail;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>
                <?php
                if (isset($_GET["number"])){
                    echo $number;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <?php
                if (isset($_GET["sex"])){
                    echo $isMale;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td>
                <?php
                if (isset($_GET["bday"])){
                    echo $bday;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Nationality</td>
            <td>
                <?php
                if (isset($_GET["nationality"])){
                    echo $nationality;
                }
                ?>
            </td>
        </tr>
    </table>
    <table style="margin-bottom: 30px;">
        <tr>
            <th colspan="2">Last Work Position</th>
        </tr>
        <tr>
            <td>Company Name</td>
            <td>
                <?php
                if (isset($_GET["company"])){
                    echo $companyName;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>From</td>
            <td>
                <?php
                if (isset($_GET["from"])){
                    echo $from;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>To</td>
            <td>
                <?php
                if (isset($_GET["to"])){
                    echo $to;
                }
                ?>
            </td>
        </tr>
    </table>
    <table style="margin-bottom: 30px;">
    <tr>
        <th colspan="2">Computer Skills</th>
    </tr>
    <tr>
        <td>Programming Languages</td>
        <td>
            <table id="compLangSubTable">
                <thead>
                    <th>Language</th>
                    <th>Skill Level</th>
                </thead>
                <?php
                if(isset($_GET["clang"]) && isset($_GET["levelCompLang"])){
                    $clangArr = $_GET["clang"];
                    $levelCLang = $_GET["levelCompLang"];
                    $compTableSize = sizeof($_GET["clang"]);
                }
                ?>

                <script>
                    var compTableSize = <?php Print($compTableSize); ?>;
                    var clangArr = <?php echo json_encode($clangArr); ?>;
                    var levelCLangArr = <?php echo json_encode($levelCLang); ?>;

                    for (var i = 0; i < compTableSize; i++){
                        var newTableRow = document.createElement("tr");
                        newTableRow.innerHTML = "\<td>" + clangArr[i] + "\</td><td>" + levelCLangArr[i] + "\</td>";
                        document.getElementById("compLangSubTable").appendChild(newTableRow);
                    }
                </script>
            </table>
        </td>
    </tr>
</table>

<table style="margin-bottom: 30px;">
    <tr>
        <th colspan="2">Other Skills</th>
    </tr>
    <tr>
        <td>Languages</td>
        <td>
            <table id="langSubTable">
                <thead>
                    <th>Language</th>
                    <th>Comprehension</th>
                    <th>Reading</th>
                    <th>Writing</th>
                </thead>
                <?php
                if(isset($_GET["language"]) && isset($_GET["comprehension"]) && isset($_GET["reading"]) && isset($_GET["writing"])){
                    $languageArr = $_GET["language"];
                    $levelComArr = $_GET["comprehension"];
                    $levelReadArr = $_GET["reading"];
                    $levelWriteArr = $_GET["writing"];
                    $langTableSize = sizeof($_GET["language"]);
                }
                ?>

                <script>
                    var langTableSize = <?php Print($langTableSize); ?>;
                    var languageArr = <?php echo json_encode($languageArr); ?>;
                    var levelComArr = <?php echo json_encode($levelComArr); ?>;
                    var levelReadArr = <?php echo json_encode($levelReadArr); ?>;
                    var levelWriteArr = <?php echo json_encode($levelWriteArr); ?>;

                    for (var i = 0; i < langTableSize; i++){
                        var newTableRow = document.createElement("tr");
                        newTableRow.innerHTML = "\<td>" + languageArr[i] + "\</td><td>" + levelComArr[i] + "\</td>" +
                            "\<td>" + levelReadArr[i] + "\</td><td>" + levelWriteArr[i] + "\</td>";
                        document.getElementById("langSubTable").appendChild(newTableRow);
                    }
                </script>

            </table>
        </td>
    </tr>
    <tr>
        <td>Driver's License</td>
        <td id="license">
            <?php
            if(isset($_GET["license"])){
                $licenses  = $_GET["license"];

                for ($k = 0; $k < sizeof($licenses); $k++){
                    if ($k === sizeof($licenses) - 1){
                        echo $licenses[$k];
                    } else {
                        echo $licenses[$k] . ", ";
                    }

                }
            }
            ?>
        </td>
    </tr>
</table>
</body>

</html>