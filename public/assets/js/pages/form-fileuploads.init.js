"use strict";
!function (i) {
    function e() {
        this.$body = i("body")
    }

    e.prototype.init = function () {
        Dropzone.autoDiscover = !1, i('[data-plugin="dropzone"]').each(function () {
            var e = i(this).attr("action"), o = i(this).data("previewsContainer"), e = {url: e};
            o && (e.previewsContainer = o);
            o = i(this).data("uploadPreviewTemplate");
            o && (e.previewTemplate = i(o).html());
            i(this).dropzone(e)
        })
    }, i.FileUpload = new e, i.FileUpload.Constructor = e
}(window.jQuery), window.jQuery.FileUpload.init(), 0 < $('[data-plugins="dropify"]').length && $('[data-plugins="dropify"]').dropify({
    messages: {
        default: "Drag and drop a file here or click",
        replace: "Drag and drop or click to replace",
        remove: "Remove",
        error: "Ooops, something wrong appended."
    }, error: {fileSize: "The file size is too big (1M max)."}
});