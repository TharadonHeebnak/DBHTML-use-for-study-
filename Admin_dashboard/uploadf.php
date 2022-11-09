<?php
    include 'session.php';
    include 'headbar.php';

?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>หลักฐานการชำระเงิน</title>
        <meta http-equiv="Content-Type" content="Type=text/html; charset=utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body><div class="main-content">
        <main>
            <h1>หลักฐานการชำระเงิน</h1>
        <div id="examples">
            <fieldset></fieldset>
                <legend>อัปโหลดหลักฐานการชำระเงิน</legend>
                <!--             <p>Pick up an image to upload, and press "upload" </p> -->
                <form name="form2" enctype="multipart/form-data" method="post" action="upload.php">
                    <p><input type="file" size="32" name="my_field" value="" /></p>
                    <p class="button"><input type="hidden" name="action" value="image" />
                        <input type="submit" name="Submit" value="upload" /></p>
                </form>
            </fieldset>
        </div>

        <section class="recent">
        <img src="/DBHTML/Admin_dashboard/imag1.png" alt="Italian Trulli" width="600px">
                </section>
        <script type="text/javascript">
            window.onload = function() {

                function xhr_send(file, status, progress) {
                    if (file) {
                        xhr.addEventListener('readystatechange', function(event) {
                            if (xhr.readyState == 4) {
                                document.getElementById(status).innerHTML = xhr.responseText;
                            }
                        }, false);

                        xhr.upload.addEventListener("progress", function(event) {
                            if (event.lengthComputable) {
                                self.progress = event.loaded / event.total;
                            } else if (this.explicitTotal) {
                                self.progress = Math.min(1, event.loaded / self.explicitTotal);
                            } else {
                                self.progress = 0;
                            }
                            document.getElementById(progress).innerHTML = ' ' + Math.floor(self.progress * 1000) / 10 + '%';
                            document.getElementById(progress).style.width = self.progress * 100 + '%';
                        }, false);

                        xhr.open("POST", "upload.php?action=xhr");
                        xhr.setRequestHeader("Cache-Control", "no-cache");
                        xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                        xhr.setRequestHeader("X-File-Name", encodeURIComponent(file.name));
                        xhr.send(file);
                    }
                }

                function xhr_parse(file, status) {
                    if (file) {
                        document.getElementById(status).innerHTML = "File selected : " + file.name + "(" + file.type + ", " + file.size + ")";
                    } else {
                        document.getElementById(status).innerHTML = "No file selected!";
                    }
                }

                function dnd_hover(e) {
                    e.stopPropagation();
                    e.preventDefault();
                    e.target.className = (e.type == "dragover" ? "hover" : "");
                }

                var xhr = new XMLHttpRequest();

                if (xhr && window.File && window.FileList) {

                    // xhr example
                    var xhr_file = null;
                    document.getElementById("xhr_field").onchange = function() {
                        xhr_file = this.files[0];
                        xhr_parse(xhr_file, "xhr_status");
                    }
                    document.getElementById("xhr_upload").onclick = function(e) {
                        e.preventDefault();
                        xhr_send(xhr_file, "xhr_result", "xhr_progress");
                    }

                    // drag and drop example
                    var dnd_file = null;
                    document.getElementById("dnd_drag").style.display = "block";
                    document.getElementById("dnd_field").style.display = "none";
                    document.getElementById("dnd_drag").ondragover = function(e) {
                        dnd_hover(e);
                    }
                    document.getElementById("dnd_drag").ondragleave = function(e) {
                        dnd_hover(e);
                    }
                    document.getElementById("dnd_drag").ondrop = function(e) {
                        dnd_hover(e);
                        var files = e.target.files || e.dataTransfer.files;
                        dnd_file = files[0];
                        xhr_parse(dnd_file, "dnd_status");
                    }
                    document.getElementById("dnd_field").onchange = function(e) {
                        dnd_file = this.files[0];
                        xhr_parse(dnd_file, "dnd_status");
                    }
                    document.getElementById("dnd_upload").onclick = function(e) {
                        e.preventDefault();
                        xhr_send(dnd_file, "dnd_result", "dnd_progress");
                    }

                }
            }
        </script>
</main>
    </body>
        </div>

    </html>