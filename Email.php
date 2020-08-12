<?php


class Email
{
    private $userName;
    private $userEmail;
    private $message;
    private $myName = "Cody Jolly";
    private $myEmail = "jolly.cody@gmail.com";


    public function __construct(array $emailData)
    {
        $this->userName = $emailData['fullName'];
        $this->userEmail = $emailData['email'];
        $this->message = $emailData['message'];
    }

    public function sendEmailToMe()
    {
        $subject = "New message from contact form!";
        $subject2 = "Copy of your form submission";
        $message2 = "Here is a copy of your message " . $this->userName . "\n\n" . "To: " . $this->myName . "\n" . $this->message;


        $newMessage = $this->userName . " wrote the following:" . "\n\n" . $this->message;

        $headers = "From:" . $this->userEmail;
        $headers2 = "From:" . $this->myEmail;
        //sends email to $myEmail
        mail($this->myEmail,$subject,$newMessage,$headers);
        //sends a copy of the message to the $userEmail
        mail($this->userEmail,$subject2,$message2,$headers2);
    }

}