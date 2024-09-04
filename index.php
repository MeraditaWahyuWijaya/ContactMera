<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        /* Gaya umum untuk body */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F7DCB9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            padding-top: 50px; /* Menambahkan padding untuk menggeser form ke bawah */
        }

        /* Gaya untuk h1 */
        h1 {
            color: #914F1E;
            font-size: 36px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Container untuk form */
        form {
            background-color: #DEAC80;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
            transition: transform 0.3s ease;
        }

        form:hover {
            transform: scale(1.02);
        }

        /* Gaya untuk judul form */
        h2 {
            text-align: center;
            color: #914F1E;
            font-size: 28px;
            margin-bottom: 30px;
            font-weight: 600;
        }

        /* Gaya untuk label */
        form label {
            display: block;
            font-weight: 500;
            color: #FEF3E2;
            margin-bottom: 8px;
            font-size: 14px;
        }

        /* Gaya untuk input dan textarea */
        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #f7fafc;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        form input[type="text"]:focus,
        form input[type="email"]:focus,
        form textarea:focus {
            border-color: #3182ce;
            box-shadow: 0 0 8px rgba(49, 130, 206, 0.2);
            outline: none;
        }

        /* Gaya untuk radio button */
        form input[type="radio"] {
            margin-right: 10px;
        }

        form input[type="radio"] + label {
            margin-right: 20px;
            font-weight: 400;
            color: #FEF3E2;
        }

        /* Gaya untuk tombol submit */
        form input[type="submit"] {
            background-color: #FEF3E2;
            color: #914F1E;
            padding: 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 500;
            width: 100%;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #2b6cb0;
            transform: translateY(-2px);
        }

        /* Gaya untuk placeholder */
        form input::placeholder,
        form textarea::placeholder {
            color: #a0aec0;
        }

        /* Gaya untuk textarea */
        form textarea {
            resize: vertical;
            height: 120px;
        }

    </style>
</head>
<body>
    <h1>Contact Form</h1>

    <form action="proses.php" method="post">
        <!-- Nama -->
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <!-- NIM -->
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>

        <!-- Kelas -->
        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas" required><br><br>

        <!-- Email -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Gender -->
        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>

        <!-- Box Saran -->
        <label for="saran">Saran:</label><br>
        <textarea id="saran" name="saran" rows="4" cols="50"></textarea><br><br>

        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>
