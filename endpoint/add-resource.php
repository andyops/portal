<?php
// Include the database connection file
include('../conn/conn.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Retrieve data from the form
        $jobTitle = $_POST['job-title'];
        $jobDescription = $_POST['job-description'];
        $responsibilities = $_POST['responsibilities'];
        $salary = $_POST['salary'];
        $location = $_POST['location'];
        $requirements = $_POST['requirements'];

        // Prepare and execute the SQL query to insert data into the database
        $stmt = $conn->prepare("INSERT INTO job_openings (job_title, job_description, responsibilities, salary, location, requirements) VALUES (:jobTitle, :jobDescription, :responsibilities, :salary, :location, :requirements)");
        $stmt->bindParam(':jobTitle', $jobTitle);
        $stmt->bindParam(':jobDescription', $jobDescription);
        $stmt->bindParam(':responsibilities', $responsibilities);
        $stmt->bindParam(':salary', $salary);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':requirements', $requirements);
        $stmt->execute();
        echo "
        <script>
            alert('Registered Successfully');
            window.location.href = 'http://localhost/portal/adminpage.html';
        </script>
        ";
        $conn->commit();
    } catch (PDOException $e) {
        // If an error occurred, display an error message
        echo "Error: " . $e->getMessage();
    }
} else {
    // If the form was not submitted via POST method, redirect the user to the form page
    header("Location: ../addjob.html");
    exit();
}
?>
