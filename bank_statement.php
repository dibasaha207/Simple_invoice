<?php require('fpdf.php') ?>
<!DOCTYPE html>
<html>

<body>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
            border: 0;
            font-family: 'Times New Roman', Times, serif;

        }

        body {
            justify-content: center;
            text-align: center;
            margin: auto;
        }
#name{
    margin-top:80px ;
    font-size: 20px;
            border-bottom: 3px solid rgb(34, 30, 67);
            width: 450px;
            background-color: rgb(254, 241, 212);            
            margin-bottom: 8px;
            padding: 12px 15px;
            color: black;
}      
        #roll {
            font-size: 20px;
            border-bottom: 3px solid rgb(34, 30, 67);
            width: 450px;
            background-color: rgb(254, 241, 212);
            margin-top: 10px;
            margin-bottom: 8px;
            padding: 12px 15px;
            color: black;
            appearance: none;

        }

        #name,
        #roll::placeholder {
            color: darkgrey;
        }

        #submit {
            display: block;
            font-size: 20px;
            border: 3px solid rgb(34, 30, 67);
            width: 140px;
            background-color: rgb(34, 30, 67);
            margin-top: 20px;
            margin-bottom: 4px;
            padding: 12px 15px;
            border-radius: 17px;
            color: rgb(254, 241, 212);
            margin: 8px auto;
        }

        #submit:hover {
            color: rgb(255, 255, 255);
            font-weight: bold;
        }
    </style>
    <form action="bank.php">
        <input type="text" name="name" id="name" placeholder="Enter your name" required><br>
        <input type="number" name="roll" id="roll" placeholder="Enter your roll" required><br>
        <input type="number" name="amt" id="roll" placeholder="Enter the amount of credit hour" required><br>
        <input type="number" name="credit" id="roll" placeholder="Enter the credit of courses" required><br>
        <input type="submit" value="SUBMIT" id="submit">
    </form>
</body>

</html>