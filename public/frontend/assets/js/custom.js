$(document).ready(function () {
    estimateForYourInvestment();
    // triger button of image
    $('#profileImage').click(function () {
     $('#profilePhoto').trigger('click');
    })

    $('#profileImageUpload').on('submit', function(event){
        event.preventDefault();
        $.ajax({
        url:"profile/photo",
        method:"POST",
        data:new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(data)
        {
            $('#message').css('display', 'block');
            $('#message').html(data.message);
            $('#message').addClass(data.class_name);
            $('#uploaded_image').html(data.uploaded_image);
        }
        })
    });

    $('#Investmentprice').change(function () {
        var Investmentprice = $(this).val();
        $('#totalInvestmentShow').html(Investmentprice);
        $('#totalInvestment').val(Investmentprice);
        estimateForYourInvestment();
    });

    $('#totalInvestment').on('change', function () {
        estimateForYourInvestment();
    });

    $('#holdPeriod').on('change', function () {
        estimateForYourInvestment();
    });

    $('#rentalDividend').on('change', function () {
        estimateForYourInvestment();
    });


});

function estimateForYourInvestment() {
    var initialInvestment = parseInt($('#totalInvestment').val());
    var holdPeriod        = parseInt($('#holdPeriod').val());
    var originalValue     = parseInt($('#original-price').val());
    var appreciationRate  = parseInt($('#appreciation').val());
    var dividendRate      = parseInt($('#rentalDividend').val());

    var appreciationRatePrice = percentGet(appreciationRate,initialInvestment);//0.5
    var dividendRatePrice     = percentGet(dividendRate, initialInvestment);//0.4

    var totalReturn     = totalReturnMethod(initialInvestment,appreciationRatePrice,dividendRatePrice,holdPeriod); //1476
    var totalDividend   = totalDividendMethod(dividendRatePrice,initialInvestment,holdPeriod); //200
    var annualReturn    = annualReturnMethod(totalReturn, initialInvestment, holdPeriod);// = 9.52

    $('#totalReturnVal').html(totalReturn.toLocaleString('en-US', {
        style: 'currency',
        currency: 'USD',
    }));
    $('#totalDividendVal').html(totalDividend);
    $('#annualReturnVal').html(annualReturn);
}

function totalReturnMethod(initialInvestment,appreciationRatePrice,dividendRatePrice,holdPeriod) {
    return ((initialInvestment*(1 + appreciationRatePrice) ^ holdPeriod) + (dividendRatePrice * initialInvestment * holdPeriod));
}

function annualReturnMethod(totalReturn,initialInvestment,holdPeriod) {
    return roundVal((((totalReturn - initialInvestment) / holdPeriod) / initialInvestment) * 100);
}

function totalDividendMethod(dividendRatePrice,initialInvestment,holdPeriod) {
    return roundVal(dividendRatePrice * initialInvestment * holdPeriod);
}

function roundVal(num) {
   return Math.round((num + Number.EPSILON) * 100) / 100;
}

function percentGet(partialValue,totalInvestment) {
    return (100 * partialValue) / totalInvestment;
}


function previewFile(input){
    var file = $("input[type=file]").get(0).files[0];
    if(file){
        var reader = new FileReader();
        reader.onload = function(){
            $("#profile-picture").attr("src", reader.result);
        }
        reader.readAsDataURL(file);
        $('#uploadPhoto').trigger('click');
    }
}
