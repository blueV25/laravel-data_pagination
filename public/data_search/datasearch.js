

$(document).ready(function(){
    load_paginated_data();
    searchdata();
});

function searchdata(){
    $("#search_data").on('keyup', async function(){
        const query = $(this).val().trim();

        if(query === ''){
            $("#display-error-success").html(`<span class="alert alert-danger" style="min-width: 100%" >Nothing to search</span>`)
            $("#search_data").addClass("is-invalid");
            $("#search_data").removeClass("is-valid")
            load_paginated_data();
        }else{
            try {
                const response = await fetch(`/api/search-data?query=${query}`);
                const datas = await response.json();

                if(datas.length === 0){
                    $("#display-error-success").html(`<span class="alert alert-danger" style="min-width: 100%" >Data Not Found</span>`)
                    $("#search_data").addClass("is-invalid");
                    $("#search_data").removeClass("is-valid")
                }else{
                    load_datas(datas);
                    $("#display-error-success").html(``)
                    $("#search_data").removeClass("is-invalid");
                    $("#search_data").addClass("is-valid")
                }
            } catch (error) {
                console
            }
        }
    })
}

async function load_paginated_data(page = 1){
    try {
        const response = await fetch(`/api/data?page=${page}`);
        const datas = await response.json();

        load_datas(datas);

    } catch (error) {
        console.error("Error to paginate data", error);
    }
}

function load_datas(datas){
    let rows = '';
                            //diri ko nahago
    $.each(datas, function(index, data){
        rows += `
            <tr>
                <th scope="col">${data.id}</th>
                <td>${data.name}</td>
                <td>${data.middle_name}</td>
                <td>${data.last_name}</td>
                <td class="text-primary">${data.email}</td>
                <td>${data.birth_date}</td>
                <td>${data.age}</td>
                <td>${data.sex}</td>
                <td>${data.civil_status}</td>
                <th scope="col" class="text-center"><button class="btn btn-danger"><i class="bi bi-trash"></i></button></th>
                <th scope="col" class="text-center"><button class="btn btn-success"><i class="bi bi-pencil-square"></i></button></th>
            </tr>
        `;
    });

    $('tbody').html(rows);
}
