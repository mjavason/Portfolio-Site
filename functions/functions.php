
<?php

//This cleans any data i'm accepting. Removing security vulnerabilities and bugs
function Sanitize($data, $case = null)
{
    //This function cleanses and arranges the data about to be stored. like freeing it from any impurities like sql injection
    $result = htmlentities($data, ENT_QUOTES);
    if ($case == 'lower') {
        $result = strtoupper($result);
    } elseif ($case == 'none') {
        //leave it as it is
    } else {
        $result = strtoupper($result);
    }
    return $result;
}

function processQuote($formstream, $editId = null)
{
    //This function processes what user data is being stored and checks if they are accurate or entered at all.
    //It also helps in confirming if what the user entered is Okay, like someone entering two different things in the password and confirm password box
    extract($formstream);

    if (isset($submit)) {

        $datamissing = [];

        //firstname
        if (empty($name)) {
            $datamissing['name'] = "Please enter your name";
        } else {
            $name = trim(Sanitize($name));
        }


        //email address
        if (empty($email)) {
            $datamissing['email'] = "Please enter your email address";
        } else {
            $email = trim(Sanitize($email));
        }

        if (empty($message)) {
            $datamissing['message'] = "Please enter your message";
        } else {
            $message = trim(Sanitize($message));
        }
        //phone number
        // if (empty($phone)) {
        //     $datamissing['phone'] = "Phone Number";
        // } else {
        //     $phone = trim(Sanitize($phone));
        // }

        if (empty($datamissing)) {

            addQuote($name, $email, $message);
        } else {
            return $datamissing;
        }
    }
}

function addQuote($name, $em, $message)
{
    //This simply adds the filtered and cleansed data into the database 
    global $db;
    $sql = "INSERT INTO quotes(name, email, text) VALUES ('$name', '$em', '$message')";

    if (mysqli_query($db, $sql)) {
        //$_SESSION['registered'] = "true";
        //gotoPage("login.php");
        //echo "New record created successfully";
    } else {
        //echo  "<br>" . "Error: " . "<br>" . mysqli_error($db);
    }
    mysqli_close($db);
}

//This takes me to any page i want
function gotoPage($location)
{
    header('location:' . $location);
    exit();
}

function showDataMissing($datamissing, $showSuccess = null)
{
    //this function checks if the datamissing array passed in is empty. if it isnt it prints out all of its contents. if it is empty nothing happens
    if (isset($datamissing)) {
        foreach ($datamissing as $miss) {
            echo '<p class="text-danger">';
            echo $miss;
            echo '</p>';
        }
    } elseif (isset($showSuccess)) {
        echo '<p class="text-success">';
        echo "Successful";
        echo '</p>';
    }
}

?>