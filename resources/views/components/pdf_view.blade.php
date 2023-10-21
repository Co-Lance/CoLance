<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclamation Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            padding: 20px;
            border: 1px solid #e0e0e0;
            width: 100%;
            max-width: 800px;
            margin: auto;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
        }
        .details {
            padding: 20px;
            border-top: 2px solid #e0e0e0;
        }
        .label {
            font-weight: bold;
            color: #E57373; /* Red color for labels */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Reclamation Details</h2>
        </div>
        <div class="details">
            <p><span class="label">Title:</span> {{ $title }}</p>
            <p><span class="label">User:</span> {{ $reclamation->user }}</p>
            <p><span class="label">Type:</span> {{ $reclamation->type }}</p>
            <p><span class="label">Contact:</span> {{ $reclamation->contact }}</p>
            <p><span class="label">Description:</span> {{ $reclamation->description }}</p>
        </div>
    </div>
</body>
</html>
