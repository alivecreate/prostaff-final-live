// Default ckeditor
ClassicEditor
    .create(document.querySelector('#editor1'))
    .catch(error => {
        console.error(error);
    });


ClassicEditor
.create(document.querySelector('#editor2'))
.catch(error => {
    console.error('Error initializing editor2:', error);
});

ClassicEditor
.create(document.querySelector('#editor3'))
.catch(error => {
    console.error('Error initializing editor3:', error);
});