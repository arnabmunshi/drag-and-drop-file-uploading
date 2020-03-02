<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Drag and Drop</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

  <link rel="stylesheet" href="assets/css/fonts.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <div class="container d-flex align-items-center justify-content-center">
    <div class="card w-50 dropconsole-card">
      
    
      <!-- .card-body -->
      <div class="card-body">
        <!-- The fileinput-button span is used to style the file input field as button -->
        <label>Using Drag and Drop</label>
        <div id="dropconsole" class="fileinput-dropconsole">
          <span>Drop files or click to upload.</span>
          <!-- <form enctype="multipart/form-data"> -->
            <!-- The file input field used as target for the file upload widget -->
            <!-- <input id="fileupload-dropzone" type="file" name="files[]" multiple="" /> -->
          <!-- </form> -->
        </div>
      </div>
      <!-- /.card-body -->

      <!-- The progress bar -->
      <div id="progress" class="progress progress-xs rounded-0 --fade">
        <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated bg-success"
            role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <!-- The progress bar -->

      <!-- The container for the uploaded files -->
      <div id="uploadList" class="list-group list-group-flush list-group-divider">
        <div class="list-group-item d-flex align-items-center">
          <div class="list-group-item-figure">
            <img src="https://i.ibb.co/5vyP7Gy/b3e95006-017e-4377-9f45-4121dfb3bdad.png" alt="">
          </div>
          <div class="list-group-item-body">
            <div class="media align-items-center justify-content-between">
              <div class="media-body">
                <a target="_blank" href="#">new-image.jpg</a>
              </div>
              <div class="media-actions">
                <i class="fa fa-check-circle fa-lg text-success" aria-hidden="true"></i>
              </div>
            </div>
            <!-- <div class="list-group-item-text text-danger">File type not allowed</div> -->
          </div>
        </div>
      </div>
      <!-- The container for the uploaded files -->


    </div>
  </div>

  <script src="assets/js/upload.js"></script>
  <script src="assets/js/global.js"></script>
</body>
</html>