<!DOCTYPE html>
<html>
<head>
	<title>MMCOE Job Listings</title>
	<link rel="stylesheet" type="text/css" href="css/careerresources.css">
</head>
<body>
	<header>
		<h1>Job Listings</h1>
	</header>

	<section id="job-listings">
		<h2>View and apply to different Job Listings</h2>

		<section class="job">
			<h3>Software Developer</h3>
			<p class="description">Job Description: We are seeking a talented software developer to join our team and help build cutting-edge applications for our clients.</p>
			<p>Responsibilities:</p>
			<ul>
				<li>Write clean, efficient, and well-documented code</li>
				<li>Collaborate with team members to design and implement new features</li>
				<li>Contribute to the development of project timelines and deliverables</li>
			</ul>
			<p>Salary: $80,000 - $100,000 per year</p>
			<p>Location: San Francisco, CA</p>
			<p>Requirements:</p>
			<ul>
				<li>Bachelor's degree in computer science or related field</li>
				<li>3+ years of experience in software development</li>
				<li>Experience with Java, Python, and/or JavaScript</li>
			</ul>
			<button class="apply-button">Apply Now</button>
		</section>

		<section class="job">
			<h3>Marketing Manager</h3>
			<p class="description">Job Description: We are looking for a dynamic and results-driven marketing manager to lead our marketing team and drive growth for our company.</p>
			<p>Responsibilities:</p>
			<ul>
				<li>Develop and execute marketing strategies to achieve business objectives</li>
				<li>Lead a team of marketers to execute campaigns and initiatives</li>
				<li>Analyze marketing data to measure campaign effectiveness and ROI</li>
			</ul>
			<p>Salary: $90,000 - $120,000 per year</p>
			<p>Location: New York, NY</p>
			<p>Requirements:</p>
			<ul>
				<li>Bachelor's degree in marketing or related field</li>
				<li>5+ years of experience in marketing</li>
				<li>Experience in digital marketing, content marketing, and social media</li>
			</ul>
			<button class="apply-button">Apply Now</button>
		</section>
		
		<?php
        // Include the database connection file
       	include('conn/conn.php');

        // Fetch job listings from the database
        $sql = "SELECT * FROM job_openings";
        $result = $conn->query($sql);

        // Check if there are any job listings
        if ($result->rowCount() > 0) {
            // Loop through each job listing and display them
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<section class='job'>";
                echo "<h3>{$row['job_title']}</h3>";
                echo "<p class='description'>Job Description: {$row['job_description']}</p>";
                echo "<p>Responsibilities:</p>";
                echo "<ul>";
                // Split responsibilities into array and display each as list item
                $responsibilities = explode("\n", $row['responsibilities']);
                foreach ($responsibilities as $resp) {
                    echo "<li>{$resp}</li>";
                }
                echo "</ul>";
                echo "<p>Salary: {$row['salary']}</p>";
                echo "<p>Location: {$row['location']}</p>";
                echo "<p>Requirements:</p>";
                echo "<ul>";
                // Split requirements into array and display each as list item
                $requirements = explode("\n", $row['requirements']);
                foreach ($requirements as $req) {
                    echo "<li>{$req}</li>";
                }
                echo "</ul>";
                echo "<button class='apply-button'>Apply Now</button>";
                echo "</section>";
            }
        } else {
            echo "<p>No job listings available.</p>";
        }
        ?>
	</section>
</body>
</html>
