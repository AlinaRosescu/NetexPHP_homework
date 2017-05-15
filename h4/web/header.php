<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            color: #544C43;
        }

        /*------------ MAIN ---------------*/
        main {
            max-width: 60%;
            min-height: 350px;
            margin: 30px auto;
            padding: 20px;
            text-align: center;
            background: #EFDEDF;
            border-radius: 25px 5px;
            border:1px solid #C2B4B5;
        }

        /*------------ MENU ---------------*/
        nav li {
            text-decoration: none;
            display: inline-block;
            margin-right: 5px;
            padding: 5px 10px;
            color: #544C43;
            background: #FCE5CA;
            border: 1px solid #A89993;
            border-radius: 5px;
        }

        nav li:hover {
            background: #544C43;
            color: #FCE5CA;
            border: 1px solid #A89993;
        }


        /*------------ ASIDE ---------------*/
        aside{
            max-width: 50px;
            float: left;

        }
        aside li {
            list-style: none;
            margin: 10px 0;
            padding: 5px 10px;
            background: #FCE5CA;
            color: #544C43;
            border: 1px solid #A89993;
            width: 100px;
            border-radius: 5px;
        }

        aside li:hover {
            color: #FCE5CA;
            background: #544C43;
            border: 1px solid #A89993;
        }

        aside ul a {
            text-decoration: none;
        }

        /*------------ FORM ---------------*/
        h1 {
            font-size: 26px;
            text-align: center;
        }

        #add {
            max-width: 50%;
            margin: 30px auto;
            padding: 20px;
            text-align: center;
            border-radius: 25px 5px;
            border:1px solid #C2B4B5;
        }

        div {
            margin: 15px 0;
        }

        input[type=text], input[type=email],
        input[type=tel], textarea {
            width: 70%;
            float: right;
            margin-left: 10px;
        }

        label {
            margin:0 auto;
            width: 70%;
            text-align:right;
            display: inline-block;
        }

        .button {
            padding: 8px 10px;
            margin:4px;
            background: #FCE5CA;
            color: #544C43;
            border: 1px solid #A89993;
            border-radius: 5px;
        }

        .button:hover {
            margin:6px;
            color: #FCE5CA;
            background: #544C43;
            border: 3px solid #A89993;
        }

        /*------------- SUBMIT ----------------*/
        table {
            margin:0 auto;
            border-collapse: collapse;
        }

        th, tr, td {
            text-align: left;
            border: 1px solid #544C43;
            padding:8px;
        }

        th {
            color: #544C43;
            background: #FCE5CA;
        }


    </style>
</head>
<body>
<main>
    <nav>
        <ul>
            <a href="/NetexPHP_homework/h4/index.php"><li>Issues</li></a>
            <a href="/NetexPHP_homework/h4/web/projects.php"><li>Projects</li></a>
            <a href="/NetexPHP_homework/h4/web/priorities.php"><li>Priorities</li></a>
            <a href="/NetexPHP_homework/h4/web/statuses.php"><li>Statuses</li></a>
        </ul>
    </nav>

    <aside>
        <ul>
            <a href="/NetexPHP_homework/h4/web/forms/addissue.php"><li>Add issue</li></a>
            <a href="/NetexPHP_homework/h4/web/forms/addproject.php"><li>Add Project</li></a>
            <a href="/NetexPHP_homework/h4/web/forms/addpriority.php"><li>Add Priority</li></a>
            <a href="/NetexPHP_homework/h4/web/forms/addstatus.php"><li>Add Status</li></a>
        </ul>
    </aside>
