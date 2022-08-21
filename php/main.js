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

    //console.log(textvalues);

    let profile_id = $("input[name*='id'");
    let full_name = $("input[name*='fname']");
    let bio = $("input[name*='profile_bio']");
    let wedding_skill = $("input[name*='wedding'");
    let fashion_skill = $("input[name*='fashion']");
    let model_skill = $("input[name*='model']");
    let photography_skills = $("input[name*='photography']");

    profile_id.val(textvalues[0]);
    full_name.val(textvalues[1]);
    bio.val(textvalues[2]);
    wedding_skill.val(textvalues[3]);
    fashion_skill.val(textvalues[4]);
    model_skill.val(textvalues[5]);
    photography_skills.val(textvalues[6]);
})


function displayProfileData(e){
    let id = 0;
    const td = $('#tbodyProfile tr td');
    let textvalues = [];

    for(const value of td){
        //console.log(value);
        if(value.dataset.id == e.target.dataset.id){
            console.log(value);                   //--here should return only for the id target selected --it has an issue i will redo
            console.log(e.target.dataset.profile_id);
            textvalues[id++] = value.textContent;

        }
    }
    return textvalues;
}