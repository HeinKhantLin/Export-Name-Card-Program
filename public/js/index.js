function auto_change(id1,id2){
    var value = $( id1 ).val();
    $( id2 ).text( value );
}

function readURL(input,id) {
  if (input.files && input.files[0]) {

      $(id).attr( "style", "display: block !important;" );
      var reader = new FileReader();
      
      reader.onload = function (e) {
          $(id).attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]);

  }
}

function download_card(){
  //get the div content
  div_content = document.querySelector(".staff_card");
  //make it as html5 canvas
  html2canvas(div_content).then(function(canvas) {
    //$('#previewImage').append(canvas);
    data = canvas.toDataURL('image/jpeg');

      var link = document.createElement("a");
      document.body.appendChild(link);
      link.download = "staff_card.jpg";
      link.href = data;
      link.target = '_blank';
      link.click();
  });
};




