$(".btnedit").click(e => {
    let textvalues = displayData(e);

    //console.log(textvalues);
    let id = $("input[name*='service_id'");
    let service_title = $("input[name*='title']");
    let service_desc = $("input[name*='serviceDesc']");

    id.val(textvalues[0]);
    service_title.val(textvalues[1]);
    service_desc.val(textvalues[2]);
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

$(".btneditHome").click(e => {
    let textvalues = displayHomeData(e);

    //console.log(textvalues);
    let id = $("input[name*='home_id'");
    let title = $("input[name*='home_title']");
    let description = $("input[name*='home_desc']");

    id.val(textvalues[0]);
    title.val(textvalues[1]);
    description.val(textvalues[2]);
})


function displayHomeData(e){
    let id = 0;
    const td = $('#tbodyHome tr td');
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


$(".btneditProfile").click(e => {
    let textvalues = displayProfileData(e);

    console.log(textvalues);
    let id = $("input[name*='home_id'");
    let title = $("input[name*='home_title']");
    // let description = $("input[name*='home_desc']");

    id.val(textvalues[0]);
    title.val(textvalues[1]);
    description.val(textvalues[2]);
})


function displayProfileData(e){
    let id = 0;
    const td = $('#tbodyProfile tr td');
    let textvalues = [];

    for(const value of td){
        console.log(value);
        // if(value.dataset.id == e.target.dataset.id){
        //     console.log(value);
        //     //console.log(e.target.dataset.id);
        //     //textvalues[id++] = value.textContent;

        // }
    }
    return textvalues;
}