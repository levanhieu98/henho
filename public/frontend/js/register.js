  
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Steppers
$(document).ready(function () {
  var navListItems = $('div.setup-panel-2 div a'),
  allWells = $('.setup-content-2'),
  allNextBtn = $('.nextBtn-2'),
  allPrevBtn = $('.prevBtn-2');

  allWells.hide();

  navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
    $item = $(this);

    if (!$item.hasClass('disabled')) {
      navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
      $item.addClass('btn-amber');
      allWells.hide();
      $target.show();
      $target.find('input:eq(0)').focus();
    }
  });

  allPrevBtn.click(function(){
    var curStep = $(this).closest(".setup-content-2"),
    curStepBtn = curStep.attr("id"),
    prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

    prevStepSteps.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
    var curStep = $(this).closest(".setup-content-2"),
    curStepBtn = curStep.attr("id"),
    nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
    curInputs = curStep.find("input[type='text'],input[type='url']"),
    isValid = true;

    $(".form-group").removeClass("has-error");
    for(var i=0; i< curInputs.length; i++){
      if (!curInputs[i].validity.valid){
        isValid = false;
        $(curInputs[i]).closest(".form-group").addClass("has-error");
      }
    }

    if (isValid)
      nextStepSteps.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel-2 div a.btn-amber').trigger('click');
});

// -- apitp --

    $(document).ready(function(){
        var city=""
        $.get('/api/city',function(data){
            $.each(data,function(k,v){
                city+='<option value="'+v.ID+'">'+v.Title+'</option>';    
            })
            $('#tp').html(city);
        });
    });

//-- api quan --

  $('#tp').change(function() {
   var country = $('select[name="thanhpho"] option').filter(':selected').val();
   $.ajax({
      url: "/api/district/"+country,
      type:"GET"
  }).done(function(data) {
    var quan="";
    $.each(data,function(k,v){
        quan+='<option value="'+v.ID+'">'+v.Title+'</option>'; 
    });
    $('#quan').html(quan);
  });
}); 

//-- api phuong --

    $('#quan').change(function() {
   var quan = $('select[name="quan"] option').filter(':selected').val();
   $.ajax({
      url: "/api/ward/"+quan,
      type:"GET"
  }).done(function(data) {
    var phuong="";
    $.each(data,function(k,v){
        phuong+='<option value="'+v.ID+'">'+v.Title+'</option>'; 
    });
    $('#phuong').html(phuong);
  });
}); 
