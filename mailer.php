<?php
require_once "Mail.php";
foreach ($_POST['email'] as $index => $email) {
    $name=$_POST['name'][$index];
    $from = "E-CELL VNIT <noreply@ecellvnit.org>";    //your mail id
    $to = $email;
    $subject = "Registration successful";
    $body = '
    <!DOCTYPE html>
    <html>
        <head>
            <style>
                li{
                    padding:10px;
                }
                p{
                    font-size:16px;
                }
            </style>
        </head>
        <body style="width:100%; background-color:#fff; padding:50px 30px; color:1e1e1e; margin-top:100px;font-family:Helvetica,Arial,sans-serif">
        <div style="background-color:#000;width:90%;  padding:10px 30px;"><img src="https://www.ecellvnit.org/img/logo-ecell.png"></div>
            <div style="width:90%; background-color:#f7f9fb; padding:50px 30px;color: #212121;">
                <h3><b>Hello '.$name.',</b></h3>
                <p style="font-size:18px;">Thank You for registering with us. Your Unique ID is <b>'.$UNIQUE.'</b><br></p>
            </div>
            <div style="padding:60px 30px; width:90%;color: #212121;">
                <h4>Team Guidelines for Jugaad 18\'</h4>
                <ol>
                <li>Registration will begin at 9 AM.</li>
                <li>A team registering at the desk will randomly be assigned a mentor. The team leader will receive an automated email with a link. They will share this link with their mentor.</li>
                <li>The link opens up a transaction database. The mentor will be able to track each transaction simply by refreshing the page.</li>
                <li>The team leader will also form a WhatsApp group for the team and the mentor in order to facilitate swift communication and sharing of data.</li>
                <li>The mentor shall demand regular updates from their assigned teams in the form of photographic, videographic or written evidence of each transaction or of the service being sold.</li>
                <li>All participating teams must finish their sales by 4:30 pm (recommended) so that they can report back to the registration desk as clarified below.</li>
                <li>All participating teams must report to the registration area by 5 pm. Failing to do so can result in immediate disqualification of the concerned team.</li>
                <li>In the registration area, a team will approach their mentor and hand over the Rs. 100 component provided to them initially. The team will also give their profits to the mentor for verification.</li>
                <li>The team will then be returned their team leader\'s ID proof. They will also receive participation certificates for each team member.</li>
                <li>After final evaluation, teams with the top three highest profits will receive first, second and third position respectively.</li>
                <li>In order to ensure fair play, a part of the profits of the winning teams will be deducted based on the amount. With a bit of forethought, the underlying reasons for this are clear.</li>
                <li>The profits of all other teams will be returned in whole. The initial investment component of the team will not be considered for final evaluation. It will be deducted from the total amount to arrive at the profits made.</li>
                <li>There is a special award known as \'Most Innovative Award\' to recognize creative and out of the box ideas by teams. This award can go to anyone, even if the profits made are comparatively low.</li>
                <li>The winning teams will receive goodies, internships and many exciting prizes.</li>
                <li>All participants are welcome to take pictures at the photo booth in the registration area.</li>
                <li>All members can approach the organizers for doubts and/or assistance.</li>
                </ol>
            </div>
            <hr>
            <div style="padding:50px 30px; width:90%;color:#fff; background-color:#1e1e1e;">
                <h5>Contact Us</h5>
                <p>Lakshya Shukla<br>
                (Event Manager)</p>
                <p>+91 77384 46941</p>
                <p>or</p>
                <p>Mail Us: contact@ecellvnit.org</p>
            </div>
        </body>
    </html>';
    $host = "ssl://sharedlinux.cloudhostdns.net";
    $port = "465";
    $username = "noreply@ecellvnit.org";          //your mail id
    $password = "VNIT@123";                      //password of this mail id
    $headers = array('MIME-Version' => '1.0rn',
        'Content-Type' => "text/html; charset=ISO-8859-1rn",
        'From' => $from,
        'To' => $to,
        'Subject' => $subject);
    $smtp = Mail::factory('smtp',
        array('host' => $host,
            'port' => $port,
            'auth' => true,
            'username' => $username,
            'password' => $password));
    $mail = $smtp->send($to, $headers, $body);
}
 ?>
