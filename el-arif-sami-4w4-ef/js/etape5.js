function(){
    let boutWeb = document.getElementById('Web');
    let boutJeu = document.getElementById('Jeu');
    let boutSpec = document.getElementById('Spec');
    let boutImage = document.getElementById('Image');
    let boutConc = document.getElementById('Conc');
    let boutProj = document.getElementById('Proj');
    let boutTest = document.querySelector('.contenu');

    boutWeb.addEventListener('mousedown', function(){
        document.body.style.backgroundColor = "blue";
    })

    boutTest.addEventListener('mousedown', function(){
        div.body.style.backgroundColor = "blue";
        console.log('ca clique');
    })
    
}