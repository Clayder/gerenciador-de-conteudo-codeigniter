tinymce.init({
  selector: '.editor-texto',
  height: 500,
  language: 'pt_BR',
  plugins: [
    'advlist autolink lists link image imagetools charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code responsivefilemanager'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | responsivefilemanager',
  content_css: ['//www.tinymce.com/css/codepen.min.css'],
  formats:{
      alignleft: {selector: 'img',style:{float: 'left', margin: '0 10px 0 0'}},
      alignright: {selector: 'img',style:{float: 'right', margin: '0 0 0 10px'}}
  },
    external_filemanager_path:base_url()+"/assets/admin/tinymce/filemanager/",
   filemanager_title:"Gerenciador de mídia" ,
   external_plugins: { "filemanager" : base_url()+"/assets/admin/tinymce/filemanager/plugin.min.js"}
});

tinymce.init({
  selector: '.editor-comentario',
  height: 500,
  language: 'pt_BR',
  plugins: [

  ],
  toolbar: '',
  content_css: ['//www.tinymce.com/css/codepen.min.css'],
  formats:{
      alignleft: {selector: 'img',style:{float: 'left', margin: '0 10px 0 0'}},
      alignright: {selector: 'img',style:{float: 'right', margin: '0 0 0 10px'}}
  }
});