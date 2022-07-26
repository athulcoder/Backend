

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULT</title>
</head>
<script>
    let g1 = "A+";
</script>

<style>
    .container{
        width:800px;
        text-align:center;
        border:1px solid black;
        margin:auto;
        height: 800px;
    }
    table {
        border: 2px solid black;
        padding: 0px;
        width: 400px;
        margin:auto;

    }
    td{
        border-bottom: 2px solid black;
        background-color: rgb(253, 226, 226);
        text-align:left;
    }
    .rsec{
        text-align: left;
        border-left: 2px solid black;
        margin: 0;
    }
</style>
<body>
    <div class="container">
        <h1>Government of Kerala</h1>
        <h2>SSLC EXAMINATION RESULT 2022</h2>
        <table>
            <tbody>
                <tr>
                    <td> Register No.</td>
                    <td class="rsec"> <?php echo $regno;?> </td>
                </tr>
                <tr>
                    <td> Name </td>
                    <td class="rsec"> <?php echo $name;?> </td>
                </tr>
                <tr>
                    <td> Name of Guardian</td>
                    <td class="rsec"> <?php echo $father;?> </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td class="rsec"> <?php echo $dob;?> </td>
                </tr>
                <tr>
                    <td>First Language Paper I</td>
                    <td class="rsec"><?php echo $m1;?></td>
                </tr>
                <tr>
                    <td> First Language Paper II</td>
                    <td class="rsec"> <?php echo $m2;?> </td>
                </tr>
                <tr>
                    <td>English</td>
                    <td class="rsec"> <?php echo $m3;?> </td>
                </tr>
                <tr>
                    <td>Hindi </td>
                    <td class="rsec"> <?php echo $m4;?> </td>
                </tr>
                <tr>
                    <td> Social Science</td>
                    <td class="rsec"> <?php echo $m5;?></td>
                </tr>
                <tr>
                    <td> Physics</td>
                    <td class="rsec"> <?php echo $m6;?> </td>
                </tr>
                <tr>
                    <td> Chemistry</td>
                    <td class="rsec"><?php echo $m7;?></td>
                </tr>
                <tr>
                    <td>Biology</td>
                    <td class="rsec"> <?php echo $m8;?></td>
                </tr>
                <tr>
                    <td>Mathematics</td>
                    <td class="rsec"> <?php echo $m9;?></td>
                </tr>
                <tr>
                    <td>Information Technology</td>
                    <td class="rsec"> <?php echo $m10;?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td class="rsec"> <?php  echo $status;?> </td>
                </tr>
                  
                

            </tbody>
        </table>

        <h4>Legend</h4>
        <p>EHS : Eligible for Higher Studies, NHS : Not Eligible for Higher Studies</p>
        <h4>Disclaimer</h4>
        <p>Board of Public Examination,Government of Kerala is not responsible for any inadvertent error that may have crept in the results being published on internet.The results published on internet are for  immediate information to the examinees. These cannot be treated as original certificate. It will be issued by the Board oof Public Examinations separately. 
        </p>

    </div>
</body>
</html>