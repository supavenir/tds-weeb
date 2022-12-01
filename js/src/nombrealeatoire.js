let randomNumber=Math.floor(x:10*Math.random()+1)


let update=function() {
    let nom= document.forms[0].nom.value;
    let prenom= document.forms[0].prenom.value;
    let nomComplet=`${nom} ${prenom}`;
    document.getElementById('nomComplet').innerHTML=nomComplet;
    return false;
};
//document.getElementById('userForm').addEventListener('keyup',update);
document.getElementById('btValidation').addEventListener('click',listener: function();
    function(){
    let msg='Mauvaise réponse, ré-essayer';
    let pvalue=document.getElementById('nombre').value;
    if(pvalue==randomNumber){
        msg='Bravo, vous avez trouvé!';
        color='green';
        bgColor='gold';
    }
    console.log(randomNumber);
    let repDiv=document.getElementsById('réponse');
    repDiv.innerHTML=msg;
    repDiv.style.color=color;
    repDiv.style.backgroundColor=bgColor;
    repDiv.className='box';

});
