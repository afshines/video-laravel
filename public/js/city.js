

function loadWithRegion(id) {
    if (id > 0)
    {
        $.get('/city/getCity/'+id,function (state_id) {

            load_city(false,state_id[0].state_id);
            load_region(state_id[0].state_id,id);
        });

    }
    else
    {
        load_city(true,1);
    }
}




$('#city').select2(
    {
        placeholder: 'یک شهر را انتخاب کنید',
        dir: "rtl",
        language: "fa",
        theme: "bootstrap"
    }
);


$('#state').on("select2:select", function(e) {
    load_region($('#state').select2("val"),0);
});



function load_city(loadregion,select) {

    $.get('/cities',function (data) {

        var fdata = $.map(data, function (obj) {
            obj.id = obj.id || obj.state_id;
            obj.text = obj.text || obj.state_name;

            return obj;
        });


        $('#state').select2(
            {
                placeholder: 'یک استان را انتخاب کنید',
                dir: "rtl",
                language: "fa",
                theme: "bootstrap",
                data: fdata
            }
        );

        $('#state').val(select).trigger("change");


        if(loadregion)
            load_region($('#state').select2("val"),0);


    });

}


function load_region(id,region_select) {

    $('#city').html('');

    $.get('/city/'+id,function (data) {


        var fdata = $.map(data, function (obj) {
            obj.id = obj.id || obj.city_id;
            obj.text = obj.text || obj.city_name;

            return obj;
        });

        $('#city').select2(
            {
                placeholder: 'یک شهر را انتخاب کنید',
                dir: "rtl",
                language: "fa",
                theme: "bootstrap",
                data: fdata
            }
        );

        if(region_select>0) {
            $('#city').val(region_select).trigger("change");
        }

    });

}