<?php
error_reporting( 0 );
session_start();
session_destroy();

if ( $_SESSION[ 'message' ] ) {
    $message = $_SESSION[ 'message' ];
    echo "<script>
    alert('$message')
    ;
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Student management system</title>
    <link rel='stylesheet' href='css/style.css'>

    <link rel="stylesheet" href="css\bootstrap-5.0.2-dist\css\bootstrap.css">
    <script src='E:\XAMPP FILE\XAMPPP\htdocs\Projects\StudentManagementSystem\css\bootstrap-5.0.2-dist\js\bootstrap.min.js'>
    </script>
    <!-- <link rel = 'stylesheet' href = 'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css'
integrity = 'sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin = 'anonymous'>

Optional theme
<link rel = 'stylesheet' href = 'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css'
integrity = 'sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin = 'anonymous'>

<!-- Latest compiled and minified JavaScript -->
    <!-- <script src = 'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js'
integrity = 'sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin = 'anonymous'>
</script> --> -->
</head>

<body>
    <nav>
        <label for='school' class='logo'> Khadiagala Technologies</label>
        <ul>
            <li><a href=''>Home</a></li>
            <li><a href=''>Contact</a></li>
            <li><a href=''>Admission</a></li>
            <li><a href='Login.php' class='btn btn-success'>Login</a></li>

        </ul>
    </nav>
    <div class='section1'>
        <div class='container'>
            <label class=text_image for=''>We teach all tech Skills</label>
            <img class='main_image' src='images/school_image.jpg' alt='adminBlock'>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-md-4'>
                    <img class='welcome_img' src='images/school2.jpg' alt='' </div>
                    <div class='col-md-8'>
                        <h1>welcome to Khadiagala Technologies</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit sapiente veritatis animi
                            dolores,
                            voluptatum incidunt enim dolorum deleniti, dolor doloribus
                            delectus unde ratione, recusandae cum quia perferendis ullam ipsam impedit Lorem ipsum dolor
                            sit amet consectetur, adipisicing elit. Odit sapiente veritatis animi dolores,
                            voluptatum incidunt enim dolorum deleniti, dolor doloribus
                            delectus unde ratione, recusandae cum quia perferendis ullam ipsam impedit Lorem ipsum dolor
                            sit amet consectetur, adipisicing elit. Odit sapiente veritatis animi dolores,
                            voluptatum incidunt enim dolorum deleniti, dolor doloribus
                            delectus unde ratione, recusandae cum quia perferendis ullam ipsam impedit?</p>

                    </div>

                </div>

            </div>
        </div>
        <center>
            <h1>Our Tutors</h1>
        </center>
        <div class='container'>

            <div class='row'>

                <div class='col-md-4'>
                    <img class='tutor' src='images/tutor1.jpg' alt=''>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quod deserunt
                        doloribus dignissimos rerum fuga in sapiente nostrum esse laboriosam eum</p>

                </div>
                <div class='col-md-4'>
                    <img class='tutor' src='images/tutor2.jpg' alt=''>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quod deserunt
                        doloribus dignissimos rerum fuga in sapiente nostrum esse laboriosam eum</p>

                </div>
                <div class='col-md-4'>
                    <img class='tutor' src='images/tutor3.jpg' alt=''>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quod deserunt
                        doloribus dignissimos rerum fuga in sapiente nostrum esse laboriosam eum</p>

                </div>
            </div>
        </div>
        <center>
            <h1>Our Tutors</h1>
        </center>
        <div class='container'>

            <div class='row'>

                <div class='col-md-4'>
                    <img class='tutor' src='images/designer.jpg' alt=''>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quod deserunt
                        doloribus dignissimos rerum fuga in sapiente nostrum esse laboriosam eum</p>

                </div>
                <div class='col-md-4'>
                    <img class='tutor' src='images/developer.jpg' alt=''>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quod deserunt
                        doloribus dignissimos rerum fuga in sapiente nostrum esse laboriosam eum</p>

                </div>
                <div class='col-md-4'>
                    <img class='tutor' src='images/coding.jpg' alt=''>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quod deserunt
                        doloribus dignissimos rerum fuga in sapiente nostrum esse laboriosam eum</p>

                </div>
            </div>
        </div>
        <center>
            <h1 style={ padding-top:30px, padding-bottom-30px}> Admission form</h1>
        </center>
        <div align='center' class='admission_form'>
            <form action='data_check.php' method='POST'>
                <div class='adm_int'>
                    <label class='label_text' for=''>Name</label>
                    <input class='input_deg' type='text' name='name'>
                </div>
                <div class='adm_int'>
                    <label class='label_text' for=''>Email</label>
                    <input class='input_deg' type='email' name='email'>
                </div>
                <div class='adm_int'>
                    <label class='label_text' for=''>phone</label>
                    <input class='input_deg' type='number' name='phone'>
                </div>
                <div class='adm_int'>
                    <label class='label_text' for=''>message</label>
                    <textarea class='input_txt' name='message' id='' cols='20' rows='5'></textarea>
                </div>
                <div class='adm_int'>
                    <input class='btn btn-primary' type='submit' value='Apply' name='apply' id='submit'>
                </div>
            </form>
        </div>
        <footer class='footer_text'>
            <h2>All &copy copyright reserved with khadiagala technologies </h2>
        </footer>
</body>

</html>