function(){
    let boutWeb = document.getElementById('Web');
    let boutJeu = document.getElementById('Jeu');
    let boutSpec = document.getElementById('Spec');
    let boutImage = document.getElementById('Image');
    let boutConc = document.getElementById('Conc');
    let boutProj = document.getElementById('Proj');

    let boutTest = document.querySelector('.contenu');

    boutWeb.addEventListener('mousedown', function(){
        div.body.style.backgroundColor = "blue";
    })
    boutJeu.addEventListener('mousedown', function(){
        div.body.style.backgroundColor = "#CDB4DB";
    })
    boutSpec.addEventListener('mousedown', function(){
        div.body.style.backgroundColor = "#FDE2E4";
    })
    boutImage.addEventListener('mousedown', function(){
        div.body.style.backgroundColor = "#FFD6BA";
    })
    boutConc.addEventListener('mousedown', function(){
        div.body.style.backgroundColor = "#555B6E";
    })
    boutProj.addEventListener('mousedown', function(){
        div.body.style.backgroundColor = "#BEE3DB";
    })


    boutTest.addEventListener('mousedown', function(){
        div.body.style.backgroundColor = "blue";
        console.log('ca clique');
    })
    
}