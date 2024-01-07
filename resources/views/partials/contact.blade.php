<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmaBabySpa-Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        #contact {
            padding: 80px 0;
        }

        #contact h2 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 36px;
            color: #333;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box; 
        }

        textarea {
            resize: vertical;
        }

        button {
            padding: 15px 25px;
            background-color: #75C4F1;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            margin: 0 auto;
        }

        button:hover {
            background-color: #5291E4;
        }

        @media (max-width: 768px) {
            .col-md-6.offset-md-3 {
                width: 100%;
                text-align: center;
            }

            button {
                width: 50%;
            }
        }
    </style>
</head>
<body>
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form id="contactForm" method="post" action="{{ route('send.email') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
