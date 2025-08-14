// // RTl & Ltr
// $('<ul class="custom-theme"><li class="demo-li"><a href="../front-end/index.html" target="_blank">Front end</a></li><li class="btn-rtl">RTL</li><li class="btn-dark-setting">Dark</li></ul>').appendTo($('body'));
// (function () {
// })();
//live customizer js

// import { API_URL } from './Global.js';

$(document).ready(function () {

  $('.btn-rtl').on('click', function () {
    $("html").attr("dir", "");
    $(this).toggleClass('rtl');
    if ($('.btn-rtl').hasClass('rtl')) {
      $('.btn-rtl').text('LTR');
      $('body').addClass('rtl');
      $("html").attr("dir", "rtl");
    } else {
      $('.btn-rtl').text('RTL');
      $('body').removeClass('rtl');
      $("html").attr("dir", "");
    }
  });
  var body_event = $("body");
  body_event.on("click", ".btn-dark-setting", function () {
    $(this).toggleClass('dark');
    $('body').removeClass('dark');
    if ($('.btn-dark-setting').hasClass('dark')) {
      $('.btn-dark-setting').text('Light');
      $('body').addClass('dark');
    } else {
      $('#theme-dark').remove();
      $('.btn-dark-setting').text('Dark');
    }

    return false;
  });
});

function previewImage(event) {

  const input = event.target;
  const previewImage = document.getElementById('image-preview');

  if (input.files && input.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
          previewImage.src = e.target.result;
      };

      reader.readAsDataURL(input.files[0]);
  } else {
      previewImage.src = '';
      previewContainer.style.display = 'none';
  }
} 

function mainLogoPreview(event) {

  const input = event.target;
  const previewImage = document.getElementById('main-logo-preview');

  if (input.files && input.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
          previewImage.src = e.target.result;
      };

      reader.readAsDataURL(input.files[0]);
  } else {
      previewImage.src = '';
      previewContainer.style.display = 'none';
  }
} 
function lightLogoPreview(event) {

  const input = event.target;
  const previewImage = document.getElementById('light-logo-preview');

  if (input.files && input.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
          previewImage.src = e.target.result;
      };

      reader.readAsDataURL(input.files[0]);
  } else {
      previewImage.src = '';
      previewContainer.style.display = 'none';
  }
} 
function faviconLogoPreview(event) {

  const input = event.target;
  const previewImage = document.getElementById('favicon-preview');

  if (input.files && input.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
          previewImage.src = e.target.result;
      };

      reader.readAsDataURL(input.files[0]);
  } else {
      previewImage.src = '';
      previewContainer.style.display = 'none';
  }
} 


function deleteBtn(event) {
  // var sliderId = $(this).data('slider-id');

    // Call a function or perform any actions with the obtained slider ID
    $('.deleteForm').attr('action', event);
    console.log('Deleted button ID:', sliderId);


    
    
}

$(document).ready(function () {
  
  $(".data-form").on("submit", function () {
    $(".btn-submit").prop("disabled", true);
});
});


$(document).ready(function () {

  $(".url-slug").on("keyup", function () {
    // alert($(".url-slug").text());
      var inputText = $(this).val();
      var slug = generateSlug(inputText);
      $(this).val(slug);
  });
  
  $(".slug-generator").on("keyup", function () {
    var inputText = $(this).val();
    var slug = generateSlug(inputText);
    $('.url-slug').val(slug);
  });

  function generateSlug(text) {
      console.log(text.trim().toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, ''));
      return text.toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9-]+/g, '-').trim();
  }
});

function previewImages() {
    var preview = document.getElementById('images-preview');
    preview.innerHTML = '';

    var files = document.getElementById('images').files;
    console.log(files)

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = function (e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = '100px'; // Set the thumbnail width
            img.style.height = '100px'; // Set the thumbnail height
            preview.appendChild(img);
        }

        reader.readAsDataURL(file);
    }
}
function validateImage() {
  const input = document.getElementById('image');
  const sizeError = document.getElementById('sizeError');
  const preview = document.getElementById('images-preview');

  if (input.files.length > 0) {
      const file = input.files[0];
      const maxSize = 2 * 1024 * 1024; // 2MB in bytes

      if (file.size > maxSize) {
          sizeError.textContent = 'Image size must be less than 2MB.';
          preview.src = ''; // Clear the preview
          input.value = ''; // Clear the input
      } else {
          sizeError.textContent = ''; // Clear the error message

          // Display image preview
          const reader = new FileReader();
          reader.onload = function(e) {
              preview.src = e.target.result;
          };
          reader.readAsDataURL(file);
      }
  }
}

// product Inquiry Button

$(document).ready(function() {
    $('.btnInquiryDetail').click(function() {
        var productsData = $(this).attr('data-products'); // Get the data-products attribute
           
        var tableBody = document.getElementById('tableBody');

        productsData.forEach(function(item) {
          var row = `<tr>
              <td>${item.name}</td>
              <td>${item.quantity}</td>
          </tr>`;
  
          tableBody.innerHTML += row;
      });

    });
});

function handleUpdateStatus(id){
  // alert(window.api)
  
  const status1 = document.getElementById('status');
  const selected = status1 ? status1.value : null;

  const requestData = {
    status:selected,
  };

  $.ajax({
    url: `${window.api}/product-inquiry/${id}`,
    method: 'PUT',
    contentType: 'application/json', // Specify content type
    dataType: 'json',
    data: JSON.stringify(requestData), // Use data instead of body
    success: function(response) {      
      successNotify('Product Inquiry Status Updated');
        setTimeout(function() {
          window.location.reload();
      }, 1000); 
    },
    error: function(xhr, status, error) {
        console.error('Error calling API:', error);
    }
});
}


$(document).on('click', '#product-inquiry-block', function() {
  
  var name = $(this).data('name');
  var phone = $(this).data('phone');
  var email = $(this).data('email');
  var address = $(this).data('address');
  var service = $(this).data('service');
  var document = $(this).data('document');
  var individualService = $(this).data('individual-service');


  var pageUrl = $(this).data('page-url');
  var message = $(this).data('message');

  $('#name').text(`${name}`);
  $('#email').text(`${phone}`);
  $('#phone').text(`${email}`);
  $('#address').text(`${address}`);
  $('#service').text(`${service}`);
  $('#pageUrl').text(`${pageUrl}`);
  if (document) {
    $('#document').html(`<a href="${document}" target="_blank">View Document</a>`);
  }
  $('#message').text(`${message}`);
  
  // If Individual Service is defined or not
  
  if (individualService !== undefined) {
    let individualServiceArray = individualService.split(', ');
    console.log('individualServiceArray', individualServiceArray);
    let individualServiceHTML = document.createElement("ul");
    individualServiceArray.forEach(function(item) {
        let li = document.createElement("li");
        li.textContent = item;
        individualServiceHTML.appendChild(li);    
    });  
    $('#individualService').html(`${individualServiceHTML.outerHTML}`);
  } 

});
