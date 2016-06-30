<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css">

    <title>
        <?php if (isset($this->title)) echo htmlspecialchars($this->title) ?>
    </title>
</head>

<body>
<header>
    <nav class="navbar navbar-light bg-faded">
        <a class="navbar-brand" href="/">Students Ranking</a>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/rankings">Rankings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/students">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/courses">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/activities">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/groups">Groups</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/classes">Classes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/specialities">Specialities</a>
            </li>
        </ul>
    </nav>
</header>
<div class="container m-t-1">
    <main>
<?php include('messages.php'); ?>