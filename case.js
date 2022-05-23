var memoire=0;
var nb=1;
function main(i) 
{
    var joueurs = "black";
    var color=i.style;
    if(nb==1)
    {
        if((color.backgroundColor == '' || color.backgroundColor == "rgb(210,210,210)"))
        {
            memoire=i;
            color.backgroundColor=joueurs.valueOf();
            nb=0; 
        } 
        else
        {
            alert("RDV deja pris");
        }
    }
    else
    {
        alert("Appuie sur Reset pour changer de RDV");
    }
}

function rafraichir()
{
    nb=1;
    memoire.style.backgroundColor='';
}  