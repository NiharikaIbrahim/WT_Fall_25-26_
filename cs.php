<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro to CSS</title>

    <!-- External CSS link -->
    <link rel="stylesheet" href="style.css">

    <!-- Internal CSS -->
    <style>
        /* Element selector */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 20px;
        }

        /* ID selector */
        #main-title {
            color: crimson;
            text-align: center;
            font-size: 2rem;
        }

        /* Class selector */
        .highlight {
            background-color: yellow;
            padding: 5px;
            border-radius: 5px;
        }

        /* Pseudo-class selector */
        a:hover {
            color: red;
            text-decoration: underline;
        }

        /* Universal selector */
        * {
            box-sizing: border-box;
        }

        /* Box model example */
        .box {
            width: 200px;
            height: 100px;
            background-color: lightblue;
            margin: 20px;
            padding: 10px;
            border: 3px solid navy;
        }

        /* Display and position examples */
        .inline-box {
            display: inline-block;
            background-color: lightgreen;
            width: 100px;
            height: 50px;
            margin: 5px;
        }

        .relative-box {
            position: relative;
            top: 10px;
            left: 20px;
            background-color: lightcoral;
            padding: 10px;
            z-index: 2;
        }

        .overflow-box {
            width: 150px;
            height: 80px;
            border: 2px solid black;
            overflow: auto;
            padding: 5px;
        }

        /* Outline example */
        .outlined {
            outline: 3px dashed green;
        }
    </style>
</head>

<body>
    <h1 id="main-title">Intro to CSS</h1>
    <p>This page demonstrates different <span class="highlight">CSS concepts</span> including selectors, box model, and display properties.</p>

    <!-- Inline CSS -->
    <p style="color: blue; font-size: 18px;">This paragraph uses <strong>Inline CSS</strong>.</p>

    <h2>Box Model Example</h2>
    <div class="box">Content Area (Padding + Border + Margin)</div>

    <h2>Display and Position</h2>
    <div class="inline-box">Inline-Block 1</div>
    <div class="inline-box">Inline-Block 2</div>

    <div class="relative-box outlined">Relative Box with z-index</div>

    <h2>Overflow Example</h2>
    <div class="overflow-box">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non risus vel lorem malesuada interdum.
    </div>

    <h2>Pseudo-Class Example</h2>
    <p>Hover over this <a href="#">link</a> to see the effect.</p>
</body>
</html>
