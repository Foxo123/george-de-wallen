<?php

include("../functions.php");
include("../connect_db.php");

session_start();

class Message
{

    public $userrole;
    public $errors = [];
    public $debugmessage = [];
    private $targetUR = [];
    private $message;
    public $email;
    private $targetEmail;
    private $targetEmails = [];
    private $targetNames = [];


    public function __construct()
    {
        if (!empty($_SESSION["userrole"])) {
            $this->userrole = $_SESSION["userrole"];
        }

        if (!empty($_SESSION["em"])) {
            $this->email = $_SESSION["em"];
        }

        switch ($this->userrole) {
            case 'docent':
                $this->setTargetUserRoles("student", "begeleider");
                break;
            case 'eigenaar':
                $this->setTargetUserRoles("docent", "begeleider");
                break;
            case 'student':
                $this->setTargetUserRoles("docent", "begeleider");
                break;
            case 'begeleider':
                $this->setTargetUserRoles("docent", "student");
                break;
            default:
                exit();
                break;
        }
    }

    public function sendMessage($conn)
    {
        if (empty($this->message) || empty($this->email) || empty($this->targetEmail)) {
            array_push($this->errors, "invalid");
        } else {
            // send the message and return the query
            $sql = "INSERT INTO `messages`(`senderEmail`, `receiverEmail`, `Message`) VALUES ('$this->email','$this->targetEmail', '$this->message')";
            return mysqli_query($conn, $sql);
        }
    }

    public function getMessages($conn)
    {
        if (empty($this->email)) {
            array_push($this->errors, "no email");
        } else {
            // get all messages with our email and return the query
            $sql = "SELECT * FROM `messages` WHERE `receiverEmail` = '$this->email'";
            return mysqli_query($conn, $sql);
        }
    }

    public function deleteMessage($conn, $id)
    {
        $sql = "DELETE FROM `messages` WHERE `id` =" . $id;
        if (mysqli_query($conn, $sql)) {
            header("Location: ../index.php?content=message&alert=message-deleted");
        } else {
            header("Location: ../index.php?content=message&alert=message-deleted-failed");
        }
    }

    public function getNameAndEmailFromTargets($conn)
    {
        //first get the targets with the determined user roles
        $sql = "SELECT `email`, `rol` FROM `password` WHERE `rol` = '" . $this->targetUR[0] . "' OR `rol` = '" . $this->targetUR[1] . "';";
        $result = mysqli_query($conn, $sql);

        //loop through all the records and see if their information is in 'student' or 'mederwerker'
        while ($record = mysqli_fetch_assoc($result)) {
            if ($record["rol"] == "student") {

                array_push($this->debugmessage, $record);

                $sql2 = "SELECT `voornaam` ,`tussenvoegsel` ,`achternaam`, `email` FROM `student` WHERE `email` = '" . $record["email"] . "';";
                $result2 = mysqli_query($conn, $sql2);

                if ($result2) {
                    $record2 = mysqli_fetch_assoc($result2);
                    if(empty($record2["voornaam"]) || empty($record2["achternaam"])){
                        array_push($this->debugmessage, "found record but no name");
                    }
                    else{
                    //if found add the name combined to an array and the email to another array                    
                    array_push($this->targetNames, $record2["voornaam"] . " " . $record2["tussenvoegsel"] . " " . $record2["achternaam"]);
                    array_push($this->targetEmails, $record2["email"]);
                    }
                } else {
                    // log that there were no students found
                    array_push($this->errors, "no students");
                }
            } else {
                $sql2 = "SELECT `voornaam` ,`tussenvoegsel` ,`achternaam`, `email` FROM `medewerker` WHERE `email` =  '" . $record["email"] . "';";
                $result2 = mysqli_query($conn, $sql2);

                if ($result2) {
                    $record2 = mysqli_fetch_assoc($result2);
                    if(empty($record2["voornaam"]) || empty($record2["achternaam"])){
                        array_push($this->debugmessage, "found record but no name");
                    }
                    else{
                    array_push($this->targetNames, $record2["voornaam"] . " " . $record2["tussenvoegsel"] . " " . $record2["achternaam"]);
                    array_push($this->targetEmails, $record2["email"]);
                    }
                } else {
                    //log that there are no mederwerkes found
                    array_push($this->errors, "no medewerkers");
                }
            }
        }
        if (empty($this->targetNames)) {
            //log that there were no people found at all
            array_push($this->errors, "no targets found");
        }
    }

    //main function where everything comes together
    public function printTargetNamesAndEmails($conn)
    {
        $string = "";
        //get the names and emails from the targets we found
        $this->getNameAndEmailFromTargets($conn);

        //make html options for inside the selector based upon the arrays we made with getNameAndEmailFromTargets()
        for ($x = 0; $x < count($this->targetNames); $x++) {
            $string .= "<option value = '" . $this->targetEmails[$x] . "'>" . $this->targetEmails[$x] .  " / " . $this->targetNames[$x] . "</option>";
        }

        echo $string;
    }

    private function setTargetUserRoles($a, $b)
    {
        array_push($this->targetUR, $a);
        array_push($this->targetUR, $b);
    }
    public function getTargetNames()
    {
        return $this->targetNames;
    }
    public function getTargetEmails()
    {
        return $this->targetEmails;
    }

    public function getTargetUserRoles()
    {
        return $this->targetUR;
    }

    public function setMessage($messageToSet)
    {
        $this->message = sanitize($messageToSet);
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setTargetEmail($targetMail)
    {
        $this->targetEmail = sanitize($targetMail);
    }
}
