 <!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="refresh" content="1" />
  <title>digital clock<title/>
    <style>
        p {
            color: black ;
            font-size: 90px;
            position: absolute;
            top: 50%;
            left: 50%;
          transform: translate(-50%, -50%);
        }

        body {background-color: grey ;}
     </style>
</head>
    </body>
    <p> <?php echo date(" h: i : s A");?> </p>
</body>

</html>
