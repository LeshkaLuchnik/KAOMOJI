function copy(id)
{
    /* let ID = document.getElementById(id).innerHTML;
    console.log(ID);
 */


    // navigator.clipboard
    // .writeText( `${ID}` )
    // .then(() => { /* // Получилось! */})
    // .catch(err => { console.log('Something went wrong', err); });
}
// onclick="copy1(' . $row["ID"] . ')


document.querySelector(`#${id}`).addEventListener('click', function()
{
    let ID = document.getElementById(id).innerHTML;
    console.log(ID);
    navigator.clipboard.writeText(ID);
});