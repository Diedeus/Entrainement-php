<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="nom"></p>

<label for="text">Name</label>
<input type="Text" id=name>
<button id="btn">submit</button>
    
<script>
    let btn = document.querySelector('#btn') 
    let para = document.querySelector('#nom')

    btn.addEventListener("click", function(e){
        let nom = document.querySelector('#name').value
        para.textContent = 'Votre nom est ' + nom;
        console.log(nom);
    })
</script>
</body>
</html>