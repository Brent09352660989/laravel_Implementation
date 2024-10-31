
<?php
// Database connection details
$servername = "localhost"; // or your server address
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "resume_details"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Query to select data from the users table
$sql = "SELECT 
fullname, 
address,
phone,
email,
skl1,
skl2, 
skl3,
skl4,
skl5,  
rc1,
rc2, 
rc3,
rc4,
rc5 FROM resumeInfo;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


$fullname = ''; 
$address = '';
$phone = '';
$email = '';
$skl1 = '';
$skl2 = ''; 
$skl3 = '';
$skl4 = '';
$skl5 = '';  
$rc1 = '';
$rc2 = ''; 
$rc3 = '';
$rc4 = '';
$rc5 = '';

// Check if there are results
if ($resultCheck > 0) {
// Loop through each row and append to the output string
    while($row = mysqli_fetch_assoc($result)) {
        $fullname = $row['fullname']; 
        $address =  $row['address'];
        $phone =  $row['phone'];
        $email =  $row['email'];
        $skl1 =  $row['skl1'];
        $skl2 =  $row['skl2']; 
        $skl3 =  $row['skl3'];
        $skl4 =  $row['skl4'];
        $skl5 =  $row['skl5'];  
        $rc1 =  $row['rc1'];
        $rc2 =  $row['rc2']; 
        $rc3 =  $row['rc3'];
        $rc4 =  $row['rc4'];
        $rc5 =  $row['rc5'];
    }
} else {
    $fullname = "No results found.";
}

// close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>John Brent S. Gonzales - Resume</title>
    <link rel="stylesheet" href="{{url('vanillaHTML/style.css')}}" />
  </head>
  <body>
    <header>
      <div class="headerContainer">
        <div class="headerContent">
          <h1><?php echo $fullname; ?></h1>
          <p>
          <?php echo $email; ?> <span>|</span> <?php echo $phone; ?>
            <span>|</span> <?php echo $address; ?>
          </p>
        </div>
      </div>
    </header>

    <section id="summary">
      <h2>Summary</h2>
      <p>
        A productive and serious student employee currently
        searching for a suitable position where I can use my multitasking skill
        and ability to adapt in most situations to provide service and positive
        support towards my possible co-workers and achieve great results for the
        industry
      </p>
    </section>

    <section id="skills">
      <h2>Skills</h2>
      <ul>
        <li><span><?php echo $skl1; ?>:</span> Effective communication</li>
        <li>
          <span><?php echo $skl2; ?>:</span> Professional and dedicated
        </li>
        <li><span><?php echo $skl3; ?>:</span> Enthusiastic and motivated</li>
        <li><span><?php echo $skl4; ?>:</span> Fluent in English</li>
        <li><span><?php echo $skl5; ?>:</span> Tech-savvy</li>
      </ul>
    </section>

    <div class="flexbox">
      <section id="experience">
        <h2>Experience</h2>
        <div class="job">
          <h3>Freelance</h3>
          <p>Company Name | City, State | Dates</p>
          <ul>
            <li>Digital Product Creation</li>
            <li>Website Design</li>
            <li>Graphic Design</li>
            <li>Business Identity</li>
          </ul>
        </div>
      </section>

      <section id="education">
        <h2>Education</h2>
        <div class="degree">
          <h3>Bachelor of System Information Technology</h3>
          <p>
            Baliwag Polytechnic College | 2nd Floor, BMG Building, Barrera
            Street, Poblacion 3006, Baliwag. Bulacan | 2021-Current(2024)
          </p>
          <h3>Relevent coursework</h3>
          <ul>
            <li>
              <span><?php echo $rc1; ?>:</span>
              Learning to write clear and concise technical documentation, which
              is essential for communicating with colleagues and clients.
            </li>
            <li>
              <span><?php echo $rc1; ?>:</span>  Understanding ethical principles in information technology and the importance of integrity in the workplace.
            </li>
            <li>
              <span><?php echo $rc2; ?>:</span>  Studying individual and group behavior in organizations, which can help develop a positive work attitude.
            </li>
            <li>
              <span><?php echo $rc3; ?>:</span>  Improving English grammar, vocabulary, and writing skills.
            </li>
            <li>
              <span><?php echo $rc4; ?>:</span>  Developing programming skills, which are essential for being technology literate.
            </li>
          </ul>
        </div>
      </section>

      <section id="projects">
        <h2>Projects</h2>
        <div class="project">
          <h3>Project Name</h3>
          <p>Description of project</p>
          <ul>
            <li>POS for 5.5 cafe baliwag.</li>
            <li>LN Laboratory inventory and managment sytem.</li>
            <li>Event Reservation management for Loris Event.</li>
          </ul>
        </div>
      </section>
    </div>
  </body>
</html>
