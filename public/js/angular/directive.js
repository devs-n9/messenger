console.log("directive init");

messenger.directive('fileupload', function () {
    return {
        scope: true,
        link: function (scope, el, attrs) {
            el.bind('change', function (event) {
                var reader = new FileReader();
                var files = event.target.files[0];
                reader.onload = function () {
                    var dataURL = reader.result;
                    $('.img-preview > img').attr('src', dataURL);
                    var img = document.getElementById('image');
                    var cropper = new Cropper(img,{
                        minContainerWidth: 570,
                        minContainerHeight: + img.height / ( + img.width / 570),
                        viewMode: 0
                    });
                    
                    scope.oncropper(cropper);
                    
                    $('#galleryModal').modal('show');
                }

                
                
                reader.readAsDataURL(files);
            });
        }
    };
});