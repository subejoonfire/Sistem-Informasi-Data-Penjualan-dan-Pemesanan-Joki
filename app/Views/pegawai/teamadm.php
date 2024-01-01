<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha384-fpASw6zy3d4XxQN7n0VaLTIAdWqdjsAgCbJX0blbN0FFjU5k4fH3vkhNk2O4i8zo" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, #f4f4f4, #ffffff),
                url('path_to_background_image.jpg') no-repeat center;
            background-size: cover;
            margin: 0;
        }

        .team {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        .team-member {
            text-align: center;
            margin: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 20px;
            transition: transform 0.3s;
            width: 200px;
            position: relative;
            background-color: #ffffff;
            border: 1px solid #e6e6e6;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease;
        }

        .team-member:hover {
            transform: scale(1.1);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.3);
        }

        .team-member.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .team-member h3 {
            margin: 0;
            color: #333333;
            font-size: 1.2em;
        }

        .team-member p {
            color: #777777;
            margin: 5px 0;
        }

        .read-more {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #333333;
            font-size: 14px;
        }

        .additional-info {
            margin-top: 15px;
            font-size: 14px;
            color: #555555;
        }

    </style>
</head>

<body>

    <div class="team">
        <div class="team-member">
            <img src="assets/images/coba.jpg" alt="Team Member 1">
            <h3>Khotijatur Rahmah</h3>
            <p>Developer</p>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://api.whatsapp.com/send?phone=nomor-telepon-anda" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <div class="additional-info">
                <p>Spesialisasi: Web Development, UI/UX Design</p>
                <p>Portofolio: <a href="#">link_portofolio_1</a></p>
            </div>
        </div>

        <div class="team-member">
            <img src="assets/images/coba.jpg" alt="Team Member 2">
            <h3>Nur Aisyah</h3>
            <p>Designer</p>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://api.whatsapp.com/send?phone=nomor-telepon-anda" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <div class="additional-info">
                <p>Spesialisasi: Graphic Design, Illustration</p>
                <p>Portofolio: <a href="#">link_portofolio_2</a></p>
            </div>
        </div>

        <div class="team-member">
            <img src="assets/images/coba.jpg" alt="Team Member 3">
            <h3>Putri Rabiatul</h3>
            <p>Project Manager</p>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://api.whatsapp.com/send?phone=nomor-telepon-anda" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <div class="additional-info">
                <p>Spesialisasi: Agile Project Management, Team Leadership</p>
                <p>Portofolio: <a href="#">link_portofolio_3</a></p>
            </div>
        </div>

        <div class="team-member">
            <img src="assets/images/coba.jpg" alt="Team Member 4">
            <h3>Muhammad Difa Ariyandi</h3>
            <p>Programmer</p>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://api.whatsapp.com/send?phone=nomor-telepon-anda" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <div class="additional-info">
                <p>Spesialisasi: Web Development, Database Management, user interface</p>
                <p>Portofolio: <a href="#">link_portofolio_4</a></p>
            </div>
        </div>

        <div class="team-member">
            <img src="assets/images/...jpg" alt="Team Member 5">
            <h3>...</h3>
            <p>Content Writer</p>
            <a href="#" class="read-more"></a>
            <a href="https://api.whatsapp.com/send?phone=nomor-telepon-anda" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <div class="additional-info">

            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let teamMembers = document.querySelectorAll(".team-member");
            for (let i = 0; i < teamMembers.length; i++) {
                setTimeout(function () {
                    teamMembers[i].classList.add("animate");
                }, i * 200);
            }
        });
    </script>

</body>

</html>
