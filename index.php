<?php
// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'atyeno group';

// Create database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate and sanitize the data
    // ...

    // Insert data into the database
    $sql = "INSERT INTO your_table (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>





<!DOCTYPE html>
<html>
  <head>
    <title>Recruitment Company</title>
    <link rel="icon" href="mylogo.png.jpeg">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="recruit.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="mylogo.png.jpeg" alt="RecruitMe logo" width="100" height="100"></img>
        </a>
        
        <a class="navbar-brand" href="#">ATYENO GROUP LTD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-us">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact-us">CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
        <h1 class="jaber">WELCOME TO ATYENO GROUP LTD</h1>
        <p class="ariana">We help businesses find the right candidates for their needs</p>
        <a href="#about-us" class="btn btn-primary btn-lg">LEARN MORE</a>
          </div>
          <div class="col-md-6">
            <img src="keyboard 2.png" alt="Your Photo" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <!-- Services -->
    <div class="container-fluid" id="services">
      <h2 class="text-center">Our Services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="home.png" alt="Service Image" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Permanent Recruitment</h5>
              <p class="card-text">We help you find the right candidates for permanent positions in your organization</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="pic2.jpg" alt="Service Image" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Temporary Staffing</h5>
              <p class="card-text">We provide temporary staffing solutions to help you meet your business needs</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="pic3.jpg" alt="Service Image" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Executive Search</h5>
              <p class="card-text">We conduct executive searches to help you find the right leadership talent for your organization</p>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    </body>
    <!-- About Us -->
    <div class="container-fluid" id="about-us">
    <div class="bg_image">
      <h2 class="text-center">ABOUT ATYENO LTD</h2>
      <p>Atyeno Group Inc, the data consultant, training, and recruitment agency welcoming all
        talents worldwide. Our mission is to unlock individuals’ potential without prejudice. Our
        services are expanding, and we are currently undertaking the following tasks:
        <ul>
          <li> Data Consultancy.</li>
          <li> Recruitment in various sectors including social care and Education.</li>
       </ul>
          </p>
          <h2>Data Consultancy and Training.</h2>
          <p>If you are unsure if your data and analytics is not moving in the right direction, then you are
            in the right hands. Our team of experts who are up to date with current tools are ready to
            assist you. Whether you require advisory or training your staff in upskilling in any arm of
            data management (data governance and quality), we have a team of expertise equipped
            with ample knowledge and expertise.
            We have the capability of unlocking the value in data infrastructure for our clients to uplift
            sustainability and to achieve positive results at every stage.
            Our team of well-trained experts are in industries ranging from healthcare,Logistics,
            financial, civil infrastructure to energy and housing. Atyeno Group provides data-driven
            expertise that ensures projects are delivered on time and within the budget range.
           </p>
           <h2>Education and Social Care recruitment</h2>
           <p>
            We firmly conform to the required rules and regulations, and we are always up to date on
changes within including various sectors include safeguarding, compliance checks, customer
service and data protection.
All our education consultants offer suitable, informed guidance to all candidates, from
trainee teachers through to members of senior management. We strive to support the

recruitment and retention of UK trained teaching staff and ensure all candidates, that we
place, are happy, satisfied and content.
We understand there is no more important job than looking after the emotional and
educational needs of today’s children and young adults. That’s why the internal team at
Atyeno Group Inc. is made up of staff who have a wealth of knowledge within the sector.
The directors together have over 20 years’ experience of working within education and
recruitment, therefore our understanding of education is vast and current. We always aim
to help promote the value of teachers and the work they do in nurturing and drawing out
the talent within children and young adults.
Whether you are looking for work or require staff, you can be assured that Atyeno Group
Inc will provide you with fast and efficient solution.

Each of our specialist support workers and care teams are highly skilled; their expertise,
professionalism and reliability guarantees delivery of exceptional service, first time, every
time. Atyeno group offer a range of healthcare services to a diverse range of clients.

We strive to support the recruitment and retention of Education and social care staff within
the UK and ensure all candidates are content and happy.

If you are a candidate seeking work or employer looking to hire, please contact us and let us
support you.
           </p>
           </div>
          </div>
    <!-- Contact Us -->
    <div class="container-fluid" id="contact-us">
      <h2 class="text-center">Contact Us</h2>
      <div class="row">
        <div class="col-md-6">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-md-6">
          <h3>Visit Us</h3>
          <p>123 Main Street<br>London, UK</p>
          <h3>Call Us</h3>
          <p>+1 (123) 456-7890</p>
          <h3>Email Us</h3>
          <p>info@atyenogroup.com</p>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p>&copy; 2023 Atyeno Group Inc. All rights reserved.</p>
          </div>
          <div class="col-md-6">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>

