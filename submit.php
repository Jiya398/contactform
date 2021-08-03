<style>
<?php include 'style2.css'; ?>
</style>

    <div class="contact-sec">
    <h1> CONFIRMATION </h1>
    <div class="border"> </div>

<?php 

    $yourName = $_POST['name'];  
    $yourEmail = $_POST['email'];
    $yourPhone = $_POST['phone']; 
    $yourMessage = $_POST['message']; 

    echo "Full Name: $yourName <br/>
          Email: $yourEmail <br/>
          Phone: $yourPhone <br/>
          Message: $yourMessage <br/>
    
    ";
?>