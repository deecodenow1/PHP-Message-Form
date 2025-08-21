<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Messages</title>
</head>
<style>
    body {
        background-color: #f4f6f9;
        display:flex;
        justify-content: center;
        align-items:center;
        height: 100vh;
    }
    .form-box {
        background-color: #fff;
        padding: 30px 40px;
        box shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        width: 100%;
        max-width: 500px;
    }
    h2 {
        margin-bottom: 20px;
        text-align:center;
        color: #333;
    }
    input, textarea {
        width: 94%;
        padding: 12px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
        resize:none;
        outline: none;
    }
    button {
        width:100%;
        padding: 12px;
        margin-top: 20px;
        border: none;
        background-color: #007BFF;
        color: white;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.3s;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>
<body>
    <div class="form-box">
        <h2>Send a Message</h2>
        <form action="submit.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message..." required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</body>
</html>