function copy(id)
{
    /* if (navigator.clipboard) 
    {
        alert("true");
    } 
    else 
    {
        alert("false");
    } */



    let ID = document.getElementById(id).innerHTML;
    console.log(ID);

    navigator.clipboard.writeText(ID)
    .then(() => { console.log("Done!!!"); })
    .catch(err => { console.log('Something went wrong', err); });
}

