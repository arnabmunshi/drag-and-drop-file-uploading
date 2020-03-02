$(function() {
  var dropconsole = document.getElementById('dropconsole');
  var barFill = document.getElementById('progress-bar');
  // var barFillText = document.getElementById('progress-text');
  var startUpload = function(files) {
    app.uploader({
      files: files,
      progressBar: barFill,
      // progressText: barFillText,
      processor: 'upload.php',
      finished: function(data) {
        console.log(data);
      },
      error: function() {
        console.log('Error');
      }
    });
  }
  dropconsole.ondrop = function(e) {
    e.preventDefault();
    $(this).removeClass('drop');
    startUpload(e.dataTransfer.files);
  }
  dropconsole.ondragover = function() {
    $(this).addClass('drop');
    return false;
  }
  dropconsole.ondragleave = function() {
    $(this).removeClass('drop');
    return false;
  }
})