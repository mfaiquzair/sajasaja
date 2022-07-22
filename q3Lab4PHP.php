<!DOCTYPE html>
<html>
    <head>
        <style>
            .header{
                background-color: aliceblue;
                width: 500px;
                height: 100px;
            }

            h1{
                color: rgb(14, 173, 54);
                font-family: cursive;
            }

            body{
                width: 600px;   
                margin: 0 auto; 
                font-family:Arial;
                text-align:justify;   
            }

            p{
                font-family: sans-serif;
            }

            .footer{
                width: 500px;
                height: 100px;
            }
        </style>
    </head>
    <body>

        <div class="header"><img src="bg-header.jpg"></div>
        <h1>Computer Science</h1>
		
		<?php
		//display date
		echo "<b>".date("F j,Y")."<b>";
		?>

        <p>Faculty of Computer Systems & Software Engineering was established on 16 February 2002 to produce knowledgeable, high skilled and competitive graduates within the sphere of software engineering, system and computer network. At the beginning, the faculty had two fields which are Software Engineering and Networking.</p>
        <p>The faculty has also embarked on research and development activities in the area such as information systems, software engineering, computer systems, communication systems, graphic and multimedia technology to produce technologies that are relevant to the needs of industries. Currently, the faculty has four research groups which are Network & Security, Modeling & Simulation, Data Mining & Knowledge Management and Graphic & Image Processing to support university's focus groups (Manufacturing & Automotive and Chemical & Biotechnology).</p>
        <p>The faculty emphasizes on the development and growth of its students's enrolment and graduates. Through high quality teaching (by completing specific quality outcome and generic skills), great laboratories facilities, proper and careful advising and numerous professional activities, our students have opportunity to excel in the classroom and laboratory session.</p>

        <div class="footer"><img src="bg-footer.jpg"></div>

    </body>
</html>