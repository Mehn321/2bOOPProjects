<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" id="myform">
        <label for="">enter first number: </label>
        <input type="number" id="num1"><br>
        <label for="">enter second number: </label>
        <input type="number" id="num2"><br>
        <input type="submit" id="submit">

    </form>
    <h1 id="display"></h1>
    <script>
        document.getElementById('myform').addEventListener('submit', function(event){
            event.preventDefault();

            let n1= document.getElementById('num1').value;
            let n2= document.getElementById('num2').value;

            var num1=parseInt(n1);
            var num2=parseInt(n2);
            var sum=num1+num2;
            alert("the sum of "+num1+" and "+num2+" is "+sum);
        })
    </script>
</body>
</html>