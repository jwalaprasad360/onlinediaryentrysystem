<?php 
require("config.php");
session_start();
?>


<!DOCTYPE html>


<html lang="en">
  <head>
    <style>/* My Starter Template */

        *,
        *::before,
        *::after {
          box-sizing: border-box;
        }
        
        html {
          margin: 0;
          padding: 0;
          scroll-behavior: smooth;
        }
        
        body {
          font-family: 'Space Mono', monospace;
          line-height: 1.6;
          background: rgba(175, 238, 238, 0.3);
          color: lightcoral;
          margin: 0 auto;
          padding: 0;
          max-width: 900px;
        }
        
        /* Global Typography */
        
        h1 {
          font-size: 3rem;
        }
        
        h2 {
          font-size: 2rem;
        }
        
        h3 {
          font-size: 1.5rem;
        }
        
        p {
          font-size: 1rem;
        }
        
        form,
        textarea {
          font-size: 1rem;
        }
        
        button {
          display: block;
          font-size: 1.2rem;
          padding: 0.5em 1em;
          border: none;
          background-color: aquamarine;
          color: #0a2472;
          font-family: 'Space Mono', monospace;
        }
        
        /* Section Container Positions, Spacing, Utilities */
        
        header {
          text-align: center;
          margin: 1em auto;
        }
        
        .section {
          padding: 1em 1em;
          width: 100%;
          margin: 1em auto;
        }
        
        .container {
          width: 100%;
          margin: 0 auto;
          padding: 1em 1em;
        }
        
        .container-row {
          width: 90%;
          margin: 0 auto;
        }
        
        /* Button Standard */
        
        .btn-main,
        .btn-light,
        .btn-dark {
          display: block;
          padding: 0.6rem 2rem;
          margin: 1rem;
          transition: all 0.1s;
          border: none;
          border-radius: 2px;
          cursor: pointer;
        }
        
        .btn-main {
          color: lightgoldenrodyellow;
          background-color: lightcoral;
        }
        
        .btn-light {
          color: #0a2472;
          background-color: white;
        }
        
        .btn-dark {
          color: white;
          background-color: #0a2472;
        }
        
        button[class^='btn-']:hover,
        a[class^='btn-']:hover,
        input[class^='btn-']:hover {
          background-color: lightgoldenrodyellow;
          color: lightcoral;
          font-weight: 700;
          transform: scale(1.08);
        }
        
        /* Project Starts Here */
        
        /* Journal Entry Section */
        
        /* Title */
        
        .entry-text-title {
          width: 20em;
          margin: 1em auto;
          padding: 1em;
          border-radius: 2px;
          border: unset;
          background-color: lightgoldenrodyellow;
          font-family: 'Space Mono', monospace;
        }
        
        .entry-text-title:focus {
          outline-color: lightcoral;
          font-family: 'Space Mono', monospace;
          color: lightcoral;
          font-size: 1rem;
        }
        
        .entry-text-title::placeholder {
          color: lightcoral;
          font-family: 'Space Mono', monospace;
          font-size: 1rem;
        }
        
        .entry-text-title::-ms-value {
          color: lightcoral;
          font-family: 'Space Mono', monospace;
          font-size: 1rem;
        }
        
        /* Text Box */
        
        .container-row-journal {
          display: flex;
          justify-content: center;
        }
        
        .entry-form {
          max-width: 100%;
          margin: 0 auto;
        }
        
        .journal-label {
          display: block;
          line-height: 1.6;
          font-size: 1.2rem;
          font-weight: 700;
        }
        
        .entry-text-box {
          width: 100%;
          height: 20em;
          margin: 1em auto;
          padding: 1em;
          border-radius: 2px;
          border: unset;
          background-color: lightgoldenrodyellow;
          font-family: 'Space Mono', monospace;
        }
        
        @media (min-width: 769px) {
          .entry-text-box {
            width: 40em;
            height: 20em;
            margin: 1em auto;
            padding: 1em;
            border-radius: 2px;
            border: unset;
            background-color: lightgoldenrodyellow;
            font-family: 'Space Mono', monospace;
          }
        }
        
        .entry-text-box:focus {
          outline-color: lightcoral;
          font-family: 'Space Mono', monospace;
          color: lightcoral;
          font-size: 1rem;
        }
        
        .entry-text-box::placeholder {
          color: lightcoral;
          font-family: 'Space Mono', monospace;
          font-size: 1rem;
        }
        
        .entry-submit-btn {
          margin: 0;
        }
        
        /* Journal Results Section */
        
        .sectionEntryResults {
          width: 100%;
          margin: 0 auto;
        }
        
        .entryResultRow {
          /* display: grid;
          grid-template-columns: repeat(2, 1fr);
          width: 100%;
          margin: 1em auto; */
          display: flex;
          justify-content: center;
          align-items: center;
          flex-wrap: wrap;
        }
        
        .single-entry-div {
          max-width: 100%;
        
          margin: 1em auto;
          padding: 1em 1em;
        }
        
        .single-entry-date {
          background-color: lightgoldenrodyellow;
          width: 100%;
        }
        
        .heading-results {
          text-align: center;
          text-decoration: underline;
          text-decoration-color: lightgoldenrodyellow;
        }
        </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Main Style Sheet -->
    <link rel="stylesheet" href="main.css" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
      integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q"
      crossorigin="anonymous"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <title>My Diary App</title>
  </head>
  <body>
    <header><h1 class="title">My Personal Diary</h1></header>

    <!-- Journal Entry Section -->
    <section class="section journal-section">
      <div class="container">
        <div class="container-row container-row-journal">
          <div class="container-item container-item-journal">
            <form id="entryForm" method="POST">
                <label for="entry-title" class="journal-label">Today's Date</label>
              <input
                type="date"
                required
                name="date"
                id="entry-title"
                class="entry-text-title"
                placeholder="Choose Date"
              />
              <label for="entry-title" class="journal-label" >Today's Title</label>
              <input
              required
                type="text"
                name="title"
                id="entry-title"
                class="entry-text-title"
                placeholder="Name of entry ✏️"
              />
              <label for="entry" class="journal-label" >Today's Diary</label>
              <textarea
                
                id="entry"
                name="diary"
                required
                class="entry-text-box"
                placeholder="What's on your mind today? 💭"
              ></textarea>
              <button class="btn-main entry-submit-btn" type="submit" name="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="section sectionEntryResults" id="entryResultsSection">
      <div class="container">
        <div class="container-row entryResultRow"></div>
      </div>
    </section>

    <script src="index.js"></script>
    <?php 
    
    if(isset($_POST['submit']))
    {
      $unqid=$_SESSION["unqid"];
    $date=$_POST['date'];
    $title=$_POST['title'];
    $diary=$_POST['diary'];
    $q="INSERT INTO data VALUES('$unqid','$date','$title','$diary')";
    $r=mysqli_query($con,$q);
    if($r)
    {
      echo "
                                <script>
                                alert('DATA NOTED SUCCESFULLY');
                                </script>";
      echo "
                                <script>
                                window.location.href = 'nav1.php'; 
                                </script>";
    }
    }









    ?>
  </body>
</html>
