


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

// category click search system make
document.addEventListener('DOMContentLoaded', function () {
       // Function to handle button click and checkbox change
       function setupButtonAndCheckbox(buttonId, checkboxId) {
              var button = document.getElementById(buttonId);
              var checkbox = document.getElementById(checkboxId);
              const form = document.getElementById('myForm');

              if (button && checkbox) {
                     button.addEventListener('click', function () {
                            checkbox.checked = true;
                            if (checkbox.checked) {
                                   form.submit();
                            }
                     });

                     checkbox.addEventListener('change', function () {
                            if (checkbox.checked) {
                                   form.submit();
                            }
                     });
              } else {
                     console.error(`Button with ID ${buttonId} or checkbox with ID ${checkboxId} not found.`);
              }
       }

       // List of button and checkbox IDs
       const buttonCheckboxPairs = [
              { buttonId: 'mb_btn', checkboxId: 'mb_ch' },
              { buttonId: 'ele_btn', checkboxId: 'ele_ch' },
              { buttonId: 've_btn', checkboxId: 've_ch' },
              { buttonId: 'pr_btn', checkboxId: 'pr_ch' },
              { buttonId: 'ho_btn', checkboxId: 'ho_ch' },
              { buttonId: 'pe_btn', checkboxId: 'pe_ch' },
              { buttonId: 'me_btn', checkboxId: 'me_ch' },
              { buttonId: 'wo_btn', checkboxId: 'wo_ch' },
              { buttonId: 'hob_btn', checkboxId: 'hob_ch' },
              { buttonId: 'bus_btn', checkboxId: 'bus_ch' },
              { buttonId: 'es_btn', checkboxId: 'es_ch' },
              { buttonId: 'ed_btn', checkboxId: 'ed_ch' },
              { buttonId: 'ag_btn', checkboxId: 'ag_ch' },
              { buttonId: 'ser_btn', checkboxId: 'ser_ch' },
              { buttonId: 'otr_btn', checkboxId: 'otr_ch' }
       ];

       // Setup all buttons and checkboxes
       buttonCheckboxPairs.forEach(pair => setupButtonAndCheckbox(pair.buttonId, pair.checkboxId));
});











