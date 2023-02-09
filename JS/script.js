
/* function getRandomInt(max) 
{
    return Math.floor(Math.random() * max);
} */

function getRandomInt(min, max) 
{
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min; //Максимум не включается, минимум включается
}

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

var Smile = $( ".Smile" );
$( ".Smile" ).hover(
    function() 
    {
        $( this ).css("transform", `rotate(${getRandomInt(-25, 25)}deg)`);
    }, 
    function() 
    {
        $( this ).css("transform", "rotate(0deg)");
    }
  );


