tinymce.init({
    selector: '.editor',
    width: 600,
    height: 300,
    menubar: false,
    plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'save table contextmenu directionality emoticons template paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar:  'undo redo | cut copy paste table | formatselect fontsizeselect | forecolor backcolor | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist |  | outdent indent | blockquote subscript superscript  | lists charmap | removeformat |  code'
});
