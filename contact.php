<?php
    global $titlePage;
    $titlePage = "Contact";
    include ('partes/header.php'); 
    
    $name = '';
    $email = '';
    $message = '';
    $errorForm = '';
    $successForm = '';
    if( isset($_POST['send']) ){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if($name != '' && $email != '' && $message != ''){
            $emailMessage = 'Nome: ' . $name . ' - ';
            $emailMessage .= 'Email: ' . $email . ' - ';
            $emailMessage .= 'Mensagem: ' . $message;
            if(mail('contact@reanimatorstudio.com', 'Contact Message', $emailMessage)){
                $successForm = "Message sent successfully!";
            }else{
                $errorForm = "Some failure happened while we tried to send the email. Please try again later.";
            }
        }else{
            $errorForm = "Please check your information in the form.";
        }
    }
?>
    <div class="container">
        <div class="main-title">
            <h1>contact us</h1>
        </div>
        <form action="contact.php" class="form" method="post">
            <?php if($errorForm != ''): ?>
                <div class="form__issue">
                    <?php echo $errorForm ?>
                </div>
            <?php endif; ?>
            <?php if($successForm != ''): ?>
                <div class="form__success">
                    <?php echo $successForm ?>
                </div>
            <?php endif; ?>
            <div class="form__group">
                <label class="form__label" for="username">your name</label><br>
                <input class="form__field" id="username" type="text" name="username">
            </div>
            <div class="form__group">
                <label class="form__label" for="email">your email</label><br>
                <input class="form__field" id="email" type="email" name="email">
            </div>
            <div class="form__group">
                <label class="form__label" for="message">message</label><br>
                <textarea class="form__field" name="message" id="message" cols="20" rows="5"></textarea>
            </div>
            <input type="submit" class="form__btn" value="submit" name="send">
        </form>
    </div>
<?php include ('partes/footer.php'); ?>