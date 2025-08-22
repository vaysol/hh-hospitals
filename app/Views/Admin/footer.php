<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirm Action</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to perform this action?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- datatbles -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<!-- datatbles -->

<!-- select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"
    integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- select -->

<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function(event) {
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                nav.classList.toggle('show')
                toggle.classList.toggle('bx-x')
                bodypd.classList.toggle('body-pd')
                headerpd.classList.toggle('body-pd')
            })
        }
    }
    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    var pathArray = window.location.pathname.split('/');
    var active_page = pathArray[3];
    var active_tab = document.getElementsByClassName('.home')[0];

    if (pathArray[3]) {
        active_tab = document.getElementsByClassName(active_page)[0];
    }
    active_tab.classList.add('active')
});
</script>

<script>
// for image preview 
function image_preview(input_val, image_div) {
    $(image_div).parent().removeAttr("hidden")
    if (input_val.files && input_val.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $(image_div).attr('src', e.target.result);
        }
        reader.readAsDataURL(input_val.files[0]);
    }
}
$(".input_form_image").change(function() {
    var image_div = '#' + this.id + '_preview';
    image_preview(this, image_div);
});

// for slug 
function auto_slug(title) {
    url = document.getElementById("slug");
    url.value = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
}

// for CKEDITOR
$(document).ready(function() {
    CKEDITOR.replaceClass = 'ckeditor';
});

//modal alert
(function() {
    var proxied = window.alert;
    window.alert = function() {
        modaldiv = $(
            '<div id="myModal" class="modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 id="myModalTitle" class="modal-title">HH Hospitals ADMIN</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><p></p></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div></div></div></div>'
        );
        modaldiv.find(".modal-body").text(arguments[0]);
        modal = new bootstrap.Modal(modaldiv);
        modal.show();
    };
})();

//for confirm action modal
function confirm_action(path) {
    const confirmBtn = document.querySelector('#confirmModal .modal-footer button.btn-primary');
    confirmBtn.addEventListener('click', () => {
        window.location.href = "<?php echo base_url(); ?>" + path;
    });
}

//copy text to clipboard
function copy_text(copyText) {
    navigator.clipboard.writeText(copyText);
}
</script>

</body>

</html>