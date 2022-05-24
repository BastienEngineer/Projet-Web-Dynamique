var memoire="";
var nb=1;
var inputs = document.querySelectorAll('.l');

for(var i = 0; i < inputs.length; i++) {
    inputs[i].checked = false;
}

function main(j) 
{
    var couleur = "black";
    var color=j.style;
    if(nb==1)
    {
        if((color.backgroundColor == '' || color.backgroundColor == "rgb(210,210,210)"))
        {
            memoire=j;
            color.backgroundColor=couleur.valueOf();
            for(var i=0;i<12;i++) {
                var b=12+i;
                var a="case" + b;
                if(a!=j.id)
                {
                    document.getElementById("btn" + i).disabled=true;
                }
            }
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
    for(var i = 0; i < inputs.length; i++) {
        inputs[i].checked = false;
    }    
    memoire.style.backgroundColor='';
    document.location.reload(true);
}  