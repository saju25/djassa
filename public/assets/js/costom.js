


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
       // Initialize Dropify
       $('.dropify').dropify();

       // Function to get the file extension
       function getFileExtension(file) {
              return file.name.split('.').pop().toLowerCase(); // Get the extension and convert to lower case
       }

       // Handle file input change
       $('#input-file-now').on('change', function () {
              var files = this.files;
              $('#file-preview').empty(); // Clear previous previews
              let heicMessageDisplayed = false; // Flag to track if the message has been displayed

              for (let i = 0; i < files.length; i++) {
                     let file = files[i];
                     var extension = getFileExtension(file); // Get the file extension
                     console.log('File:', file);
                     console.log('Extension:', extension); // Log the file extension

                     if (extension === "heic") {
                            if (!heicMessageDisplayed) { // Check if the message has already been displayed
                                   console.log("hello");
                                   var textDiv = $('<div>').text(`Vous avez sélectionné le fichier ${extension} et vous ne pouvez donc pas voir l'aperçu. Si le bon fichier est sélectionné, continuez`).css({
                                          'margin': '10px',
                                          'text-align': 'center'
                                   });
                                   $('#file-preview').append(textDiv);
                                   heicMessageDisplayed = true; // Set the flag to true after displaying the message
                            }
                     } else {
                            // For other image types (JPEG, PNG, etc.)
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                   var img = $('<img>').attr('src', e.target.result).css({
                                          'width': '100px',
                                          'height': '100px',
                                          'margin': '10px'
                                   });
                                   // Append the image and the text div to the preview container
                                   $('#file-preview').append(img);
                            };
                            reader.readAsDataURL(file); // Read the image as data URL for preview
                     }
              }

       });
});

// ClassicEditor add functionality
$(document).ready(function () {
       ClassicEditor
              .create(document.querySelector('#editor'), {
                     heading: {
                            options: [
                                   { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                   { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                   { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                            ]
                     },
                     // Disable content filtering
                     htmlSupport: {
                            allow: [
                                   {
                                          name: /.*/, // Allow all elements
                                          attributes: true,
                                          classes: true,
                                          styles: true
                                   }
                            ]
                     }
              })
              .then(editor => {
                     console.log(editor);
              })
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




document.querySelectorAll('.p-2').forEach(function (div) {
       div.addEventListener('click', function () {
              // Find the hidden checkbox associated with this div
              var inputId = div.querySelector('.category-btn').getAttribute('data-input-id');
              var inputElement = document.getElementById(inputId);

              // Check the input
              inputElement.checked = true;

              // Submit the form
              document.getElementById('myForm2').submit();
       });
});












