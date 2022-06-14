$(".btnedit").click(e => {
    let textvalues = displayData(e);

    //console.log(textvalues);
    let id = $("input[name*='service_id'");

    id.val(textvalues[0]);
})

function displayData(e){
    let id = 0;
    const td = $('#tbody tr td');
    let textvalues = [];

    for(const value of td){
        //console.log(value);
        if(value.dataset.id == e.target.dataset.id){
            //console.log(value);
            //console.log(e.target.dataset.id);
            textvalues[id++] = value.textContent;

        }
    }
    return textvalues;
}