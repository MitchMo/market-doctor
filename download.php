<?
    function checkField($array, $field, $toAdd) {
        if(isset($_POST[$field])) {
            array_push($array, $toAdd);
        }
        return $array;
    }

    function createQuery($query, $field, $toAdd) {
        if(isset($_POST[$field])) {
            if($query == "SELECT ") {
                $query.=" ".$toAdd;
            }
            else {
                $query.=", ".$toAdd;
            }
        }
        return $query;
    }

    if($_POST) {
        // output headers so that the file is downloaded rather than displayed
        //header('Content-Type: text/csv; charset=utf-8');
        //header('Content-Disposition: attachment; filename=data.csv');

        $array = array();
        
        $array = checkField($array, "memberId", "ID");
        $array = checkField($array, "firstName", "FNam");
        $array = checkField($array, "lastName", "LNam");
        $array = checkField($array, "spouse", "Spouse");
        $array = checkField($array, "homePhone", "HPh");
        $array = checkField($array, "workPhone", "WPh");
        $array = checkField($array, "primaryEmail", "emailAdr");
        $array = checkField($array, "secondEmail", "emailAdr2");
        $array = checkField($array, "beepNum", "BeepNum");
        $array = checkField($array, "address1", "Addr1");
        $array = checkField($array, "address2", "Addr2");
        $array = checkField($array, "city", "City");
        $array = checkField($array, "zip", "PostCode");
        $array = checkField($array, "state", "ST");
        $array = checkField($array, "country", "Country");
        $array = checkField($array, "VVAType", "VVAType");
        $array = checkField($array, "VVANum", "VVANum");
        $array = checkField($array, "VVAExpDate", "VVAExp");
        $array = checkField($array, "AVVAType", "AVVAType");
        $array = checkField($array, "AVVANum", "AVVANum");
        $array = checkField($array, "AVVAExpDate", "AVVAExp");
        $array = checkField($array, "militaryBranch", "MilBran");
        $array = checkField($array, "joinDate", "JoinDt");
        $array = checkField($array, "entDate", "EntDt");
        $array = checkField($array, "disDate", "DisDt");
        $array = checkField($array, "listEDate", "LstEDate");
        $array = checkField($array, "codes", "Codes");
        $array = checkField($array, "comments", "Comments");
        $array = checkField($array, "cat01", "Cat01");
        $array = checkField($array, "cat02", "Cat02");
        $array = checkField($array, "cat03", "Cat03");
        $array = checkField($array, "cat04", "Cat04");
        $array = checkField($array, "cat05", "Cat05");
        $array = checkField($array, "cat06", "Cat06");
        $array = checkField($array, "cat07", "Cat07");
        $array = checkField($array, "cat08", "Cat08");
        $array = checkField($array, "cat09", "Cat09");
        $array = checkField($array, "cat10", "Cat10");
        $array = checkField($array, "cat11", "Cat11");
        $array = checkField($array, "cat12", "Cat12");
        $array = checkField($array, "cat13", "Cat13");
        $array = checkField($array, "cat14", "Cat14");
        $array = checkField($array, "cat15", "Cat15");
        $array = checkField($array, "cat16", "Cat16");
        $array = checkField($array, "cat17", "Cat17");
        $array = checkField($array, "cat18", "Cat18");
        $array = checkField($array, "cat19", "Cat19");
        $array = checkField($array, "cat20", "Cat20");
        
        $query = "SELECT ";
        
        $query = createQuery($query, "memberId", "ID");
        $query = createQuery($query, "firstName", "FNam");
        $query = createQuery($query, "lastName", "LNam");
        $query = createQuery($query, "spouse", "Spouse");
        $query = createQuery($query, "homePhone", "HPh");
        $query = createQuery($query, "workPhone", "WPh");
        $query = createQuery($query, "primaryEmail", "emailAdr");
        $query = createQuery($query, "secondEmail", "emailAdr2");
        $query = createQuery($query, "beepNum", "BeepNum");
        $query = createQuery($query, "address1", "Addr1");
        $query = createQuery($query, "address2", "Addr2");
        $query = createQuery($query, "city", "City");
        $query = createQuery($query, "zip", "PostCode");
        $query = createQuery($query, "state", "ST");
        $query = createQuery($query, "country", "Country");
        $query = createQuery($query, "VVAType", "VVAType");
        $query = createQuery($query, "VVANum", "VVANum");
        $query = createQuery($query, "VVAExpDate", "VVAExp");
        $query = createQuery($query, "AVVAType", "AVVAType");
        $query = createQuery($query, "AVVANum", "AVVANum");
        $query = createQuery($query, "AVVAExpDate", "AVVAExp");
        $query = createQuery($query, "militaryBranch", "MilBran");
        $query = createQuery($query, "joinDate", "JoinDt");
        $query = createQuery($query, "entDate", "EntDt");
        $query = createQuery($query, "disDate", "DisDt");
        $query = createQuery($query, "listEDate", "LstEDate");
        $query = createQuery($query, "codes", "Codes");
        $query = createQuery($query, "comments", "Comments");
        $query = createQuery($query, "cat01", "Cat01");
        $query = createQuery($query, "cat02", "Cat02");
        $query = createQuery($query, "cat03", "Cat03");
        $query = createQuery($query, "cat04", "Cat04");
        $query = createQuery($query, "cat05", "Cat05");
        $query = createQuery($query, "cat06", "Cat06");
        $query = createQuery($query, "cat07", "Cat07");
        $query = createQuery($query, "cat08", "Cat08");
        $query = createQuery($query, "cat09", "Cat09");
        $query = createQuery($query, "cat10", "Cat10");
        $query = createQuery($query, "cat11", "Cat11");
        $query = createQuery($query, "cat12", "Cat12");
        $query = createQuery($query, "cat13", "Cat13");
        $query = createQuery($query, "cat14", "Cat14");
        $query = createQuery($query, "cat15", "Cat15");
        $query = createQuery($query, "cat16", "Cat16");
        $query = createQuery($query, "cat17", "Cat17");
        $query = createQuery($query, "cat18", "Cat18");
        $query = createQuery($query, "cat19", "Cat19");
        $query = createQuery($query, "cat20", "Cat20");
        
        
        if($query != "SELECT ") {
            // create a file pointer connected to the output stream
            //$output = fopen('php://output', 'w');
            $output = fopen('members.csv', 'w');

            // output the column headings
            fputcsv($output, $array);

            $link = mysqli_connect("localhost", "cl25-users-p3y", "M/cUcGyVe", "cl25-users-p3y");

            if(mysqli_connect_error()) {
                die("Error connecting to database");
            }
            
            if(isset($_POST['order'])) {
                $query.=" FROM `Members` ORDER BY ".$_POST['order']." ASC";
            }
                    
            //echo "<br /><br /><br /><br />".$query;
            //fputcsv($output, array($query, "shalom");
            
            if($result = mysqli_query($link, $query)) {
                while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
                    //print_r($row);
                    fputcsv($output, $row);
                }
            }

            fclose($output);
            
            // output headers so that the file is downloaded rather than displayed
            header("Content-type: text/csv");
            header("Content-disposition: attachment; filename = members.csv");
            readfile("members.csv");
            exit();
            //mysqli_close($connection);
        }
        else {
            echo "<br /><br /><div class='alert alert-danger' role='alert'>You must choose at least one column to perform this task!</div>";
        }
        
    }
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>VVA Main</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link href="css/style.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <br /><br /><br />
    <?
        include('menu.php');
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <p class="title">Download Member Information</p>
            </div>
        </div>
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>To download member information, choose which fields you would like to see to the right, then click the create table button below. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="uncheck-all"> Uncheck All
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="lined-title">Order CSV By:</p>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="order" id="order-member" value="ID" checked>
                                    Member ID
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="order" id="order-first" value="FNam">
                                    First Name
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="order" id="order-last" value="LNam">
                                    Last Name
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="order" id="order-email" value="emailAdr">
                                    Email Address
                                </label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Create CSV</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="memberId" checked> Member ID
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="firstName" checked> First Name
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="lastName" checked> Last Name
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="spouse" checked> Spouse
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="homePhone" checked> Home Phone
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="workPhone" checked> Work Phone
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="primaryEmail" checked> Primary Email
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="secondEmail" checked> Secondary Email
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="beepNum" checked> Beep Number
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="address1" checked> Address 1
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="address2" checked> Address 2
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="city" checked> City
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="zip" checked> Zip Code
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="state" checked> State
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="country" checked> Country
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="VVAType" checked> VVA Type
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="VVANum" checked> VVA Num
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="VVAExpDate" checked> VVA Exp Date
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="AVVAType" checked> AVVA Type
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="AVVANum" checked> AVVA Num
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="AVVAExpDate" checked> AVVA Exp Date
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="militaryBranch" checked> Military Branch
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="joinDate" checked> Join Date
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="entDate" checked> Enter Date
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="disDate" checked> Dispatch Date
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="listEDate" checked> List E Date
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="codes" checked> Codes
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="comments" checked> Comments
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat01" checked> Category 1
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat02" checked> Category 2
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat03" checked> Category 3
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat04" checked> Category 4
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat05" checked> Category 5
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat06" checked> Category 6
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat07" checked> Category 7
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat08" checked> Category 8
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat09" checked> Category 9
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat10" checked> Category 10
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat11" checked> Category 11
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat12" checked> Category 12
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat13" checked> Category 13
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat14" checked> Category 14
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat15" checked> Category 15
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat16" checked> Category 16
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat17" checked> Category 17
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat18" checked> Category 18
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat19" checked> Category 19
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cat20" checked> Category 20
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        $('#uncheck-all').click(function() {
            console.log();
            
            if($('#uncheck-all').is(":checked") == true) {
                $('input[type=checkbox]').each(function () {
                   if (this.id != 'uncheck-all') {
                       this.checked = false;
                   }
                });
            }
            else {
                $('input[type=checkbox]').each(function () {
                   if (this.id != 'uncheck-all') {
                       this.checked = true;
                   }
                });
            }
            
        });
    </script>
    
</body>