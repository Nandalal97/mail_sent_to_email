

<html>
  <?php 
        use PHPMailer\PHPMailer\PHPMailer;

        require_once 'PHPMailer/src/Exception.php';
        require_once 'PHPMailer/src/PHPMailer.php';
        require_once 'PHPMailer/src/SMTP.php';
        // require 'vendor/autoload.php';

        $mail = new PHPMailer(true);
        $alert ='';

        if(isset($_POST["submit"])){
            $name=$_POST["name"];
            $phone=$_POST["phone"];
            $date=$_POST["date"];
            $time=$_POST["time"];
            $gender=$_POST["gender"];
            $age=$_POST["age"];
            $message=$_POST["message"];

            try{
                $mail ->isSMTP();
                $mail ->Host = 'smtp.gmail.com';
                $mail ->SMTPAuth = 'true';
                $mail ->Username = 'twdhpl@gmail.com';
                $mail ->Password = 'dzkc wwof zryb ysoz';
                $mail ->SMTPSecure = 'tls';
                $mail ->Port = '587';
                $mail->setFrom('twdhpl@gmail.com');
                $mail->addAddress('twdhpl@gmail.com');
                $mail->isHTML(true);
                $mail->Subject = "Receive A Home Collection Request";
                $mail->Body = "<h2>Receive A Home Collection Request</h2> <br>Name: $name <br>  Phone Number: $phone <br> Date: $date <br> Time: $time <br> Gender: $gender <br> Age: $age <br> Message: $message";
                $mail->send();
              
                $alert="Message Sent! Thankyou for contact us";

            }
            catch(Exception $e){
              $alert =$e->getMessage();
          };

        }

      ?>

  
  //boostrap 5
  <body>
    <div class="modal" id="home_modal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <!-- <h4 class="modal-title text-white">Home Collection</h4> -->

                            <span type="button" class="btn-close text-white" data-bs-dismiss="modal"></span>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">

                            <form method="post" action="#" onsubmit="return homecollectValidate()" name="homecollect">
                                <!-- Name input -->



                                <div class="row">
                                    <div class="form-outline pb-3 col-md-6">
                                        <label class="form-label">Name</label>
                                        <input type="name" name="name" class="form-control" />
                                        <div class="error" id="nameErr"></div>
                                    </div>
                                    <!-- phone number input -->
                                    <div class="form-outline pb-3 col-md-6">
                                        <label class="form-label" for="phone">Phone</label>
                                        <input type="text" id="text" name="phone" class="form-control" />
                                        <div class="error" id="mobileErr"></div>
                                    </div>
                                    <!-- password input -->
                                    <div class="form-outline pb-3 col-md-6">
                                        <label class="form-label" for="age">Age</label>
                                        <input type="text" id="age" name="age" class="form-control" />
                                        <div class="error" id="ageErr"></div>
                                    </div>
                                    <!-- gender -->
                                    <div class="form-outline pb-3 col-md-6">
                                        <label class="form-label" for="gender">Gender</label>
                                        <input type="text" id="gender" name="gender" class="form-control" />
                                        <div class="error" id="genderErr"></div>
                                    </div>

                                    <!-- date -->
                                    <div class="form-outline pb-3 col-md-6">
                                        <label class="form-label" for="date">Date</label>
                                        <input type="date" id="date" name="date" class="form-control" />
                                        <div class="error" id="dateErr"></div>
                                    </div>

                                    <!-- Time  -->
                                    <div class="form-outline pb-3 col-md-6">
                                        <label class="form-label" for="time">Time</label>
                                        <input type="time" name="time" class="form-control" />

                                    </div>
                                </div>
                                <!-- test Name -->
                                <div class="form-outline pb-3">
                                    <label class="form-label">Details</label><br>
                                    <textarea name="message" class="form-control"></textarea>
                                    <!-- <input type="text" id="details" name="details" class="form-control" /> -->
                                </div>
                                <button type="submit" name="submit" class="btn bg-blue btn-lg float-end">Submit</button>
                                <!-- Submit button -->
                            </form>
                        </div>

                        <div class="modal-footer bg-blue">
                            <h4 class="text-white text-center">Everyday: 8.00 AM to 8.00 PM</h4>
                            <p></p>

                        </div>
                    </div>
                </div>
            </div>
  </body>
</html>
