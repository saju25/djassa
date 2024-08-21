


$(document).ready(function () {

       var input = document.querySelector('input[class=colorIn]');
       new Tagify(input, {});
       var input = document.querySelector('input[class=weightIn]');
       new Tagify(input, {});
       var input = document.querySelector('input[class=sizeIn]');
       new Tagify(input, {});
       var drEvent = $('#input-file-now').dropify();
});


// Dropify data show


$(document).ready(function () {

       $('#input-file-now').on('change', function () {
              var files = this.files;
              var fileList = [];

              $('#file-preview').empty(); // Clear previous previews

              for (var i = 0; i < files.length; i++) {
                     fileList.push(files[i].name);

                     var reader = new FileReader();


                     reader.onload = function (e) {
                            var img = $('<img>').attr('src', e.target.result).css({
                                   'width': '100px',
                                   'height': '100px',
                                   'margin': '10px'
                            });
                            $('#file-preview').append(img);
                     };

                     reader.readAsDataURL(files[i]);
              }
       });
});

// ClassicEditor add functionality
$(document).ready(function () {
       ClassicEditor
              .create(document.querySelector('#editor'))
              .catch(error => {
                     console.error(error);
              });
});



document.addEventListener('DOMContentLoaded', function () {
       document.querySelectorAll('a[data-ajax]').forEach(function (link) {
              link.addEventListener('click', function (e) {
                     e.preventDefault();
                     fetch(this.href)
                            .then(response => response.text())
                            .then(html => {
                                   document.querySelector('.container').innerHTML = html;
                            });
              });
       });
});















